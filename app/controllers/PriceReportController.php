<?php

class PriceReportController extends BaseController
{

    protected $productDataRepo;

    public function __construct(ProductDataRepository $productDataRepo)
    {
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
