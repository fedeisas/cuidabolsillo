<?php

class ProductsController extends BaseController
{
    protected $productDataRepo;

    public function __construct(ProductDataRepository $productDataRepo)
    {
        $this->productDataRepo = $productDataRepo;
    }

    public function index()
    {
        $title = Config::get('custom.name') . " | Productos";
        $products = Product::orderBy('name', 'asc')->remember(120)->get();
        return View::make('products.index', compact('title', 'products'));
    }

    public function show($hash)
    {
        $productID = Hashids::decrypt($hash)[0];
        $product = Product::findOrFail($productID);
        $province = Province::findOrFail(Session::get('province_id'));

        $title = Config::get('custom.name') . " | Producto | " . $product->name;

        // Price history
        $priceHistory = $this->productDataRepo->getRecentHistory(
            $product->id,
            Session::get('province_id')
        );

        // IBP data
        $ibp = $this->productDataRepo->getIBP($product->id, $province->id);

        // Suggested Price
        $suggestedPrice = $this->productDataRepo->getSuggestedPrice($product->id, $province->id);

        return View::make(
            'products.show',
            compact('title', 'product','priceHistory', 'ibp', 'province', 'suggestedPrice')
        );
    }
}
