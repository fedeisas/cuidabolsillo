<?php

class HomeController extends BaseController
{
    public function index()
    {
        $title = Config::get('custom.name') . " | Inicio";

        $products = Product::remember(60)->orderBy('name', 'asc')->get();

        $province = Province::remember(60)->findOrFail(Session::get('province_id'));

        $select = array();

        $products->each(function ($product) use (&$select) {
            $select[(int) $product->id] = $product->name;
        });

        return View::make('home', compact('title', 'products', 'select', 'province'));
    }
}
