<?php

class HomeController extends BaseController
{
    public function index()
    {
        $title = Config::get('custom.name') . " | Inicio";

        $products = Product::orderBy('name', 'asc')->get();

        $province = Province::findOrFail(Session::get('province_id'));

        $select = array();

        $products->each(function ($product) use (&$select) {
            $select[(int) $product->id] = $product->name;
        });

        return View::make('home', compact('title', 'products', 'select', 'province'));
    }
}
