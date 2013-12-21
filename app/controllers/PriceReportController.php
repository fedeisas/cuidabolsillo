<?php

class PriceReportController extends BaseController
{

    protected $foursquare;

    protected $productDataRepo;

    public function __construct(ProductDataRepository $productDataRepo)
    {
        $this->foursquare = new FoursquareVenueFinder;
        $this->productDataRepo = $productDataRepo;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $validator = Validator::make(Input::all(), PriceReport::$rules);

        if (!$validator->passes()) {
            return Redirect::route('home')->withMessage('Debe ingresar un precio.');
        }

        $priceReport = PriceReport::create(array(
            'product_id' => Input::get('product_id'),
            'province_id' => Session::get('province_id'),
            'price' => Input::get('price'),
            'latitude' => Input::get('latitude'),
            'longitude' => Input::get('longitude'),
            'session_id' => Session::getId()
        ));

        if ($priceReport->latitude && $priceReport->longitude) {

            $venues = $this->foursquare->search('', null, $priceReport->latitude, $priceReport->longitude);
            $possibilities = new Illuminate\Support\Collection;

            foreach ($venues as $venue) {
                if (!Business::where('foursquare_id', $venue['foursquare_id'])->count()) {
                    $possibilities->push(Business::create($venue));
                } else {
                    $possibilities->push(Business::where('foursquare_id', $venue['foursquare_id'])->get()->first());
                }
            }

            if ($possibilities->count()) {
                $priceReport->possible_businesses = serialize($possibilities->lists('id'));
                $priceReport->save();
            }
        }

        return Redirect::route('pricereport.show', $priceReport->hash);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($hash)
    {
        $title = Config::get('custom.name') . " | Reporte";

        $priceReportId = Hashids::decrypt($hash)[0];
        $priceReport = PriceReport::find($priceReportId);

        // Average Price last 7 days
        $averagePrice = PriceReport::where('product_id', $priceReport->product_id)
                                   ->where('id', '!=', $priceReportId)
                                   ->where('created_at', '>', Carbon\Carbon::now()->subWeek())
                                   ->avg('price');

        if (is_null($averagePrice)) {
            $averagePrice = $priceReport->price;
        }

        // Percent variation
        $percentVariation = getVariation($priceReport->price, $averagePrice);

        // Price history
        $priceHistory = $this->productDataRepo->getRecentHistory(
            $priceReport->product_id,
            Session::get('province_id')
        );

        // IBP data
        $ibp = $this->productDataRepo->getIBP($priceReport->product_id, Session::get('province_id'));

        return View::make(
            'pricereports.show',
            compact(
                'title',
                'priceReport',
                'percentVariation',
                'averagePrice',
                'priceHistory',
                'ibp'
            )
        );
    }
}
