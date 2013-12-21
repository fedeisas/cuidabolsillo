<?php

class PriceReportController extends BaseController
{

    protected $foursquare;

    public function __construct()
    {
        $this->foursquare = new FoursquareVenueFinder;
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
            'price' => Input::get('price'),
            'latitude' => Input::get('latitude'),
            'longitude' => Input::get('longitude'),
            'session_id' => Session::getId()
        ));

        $possibilities = array();

        if ($priceReport->latitude && $priceReport->longitude) {

            $venues = $this->foursquare->search('', null, $priceReport->latitude, $priceReport->longitude);

            foreach ($venues as $venue) {
                if (!Business::where('foursquare_id', $venue['foursquare_id'])->count()) {
                    $possibilities[] = Business::create($venue);
                } else {
                    $possibilities[] = Business::where('foursquare_id', $venue['foursquare_id'])->get()->first();
                }
            }

            if (count($possibilities)) {
                $priceReport->business_id = $possibilities[0]->id;
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
        $priceHistory = PriceReport::with('business')
                                   ->where('product_id', $priceReport->product_id)
                                   ->where('id', '!=', $priceReportId)
                                   ->orderBy('created_at', 'desc')
                                   ->get();

        // IBP data
        $ibp = IBP::where('product_id', $priceReport->product_id)
                  ->orderBy('created_at', 'asc')
                  ->take(1)
                  ->get();
                  dd($ibp);
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
