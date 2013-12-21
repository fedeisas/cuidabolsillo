<?php

class ProductController extends BaseController
{

    public function index()
    {
        $title = Config::get('custom.name') . " | Productos";
        $products = Product::orderBy('name', 'asc')->get();
        return View::make('products.index', compact('title', 'products'));
    }

    public function show($hash)
    {
        $productID = Hashids::decrypt($hash)[0];
        $product = Product::findOrFail($productID);

        $title = Config::get('custom.name') . " | Producto | " . $product->name;

        return View::make('products.show', compact('title'));
    }
}
