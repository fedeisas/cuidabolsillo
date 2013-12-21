<?php

class StaticController extends BaseController
{

    public function about()
    {
        $title = Config::get('custom.name') . " | About";
        return View::make('static.about', compact('title'));
    }

    public function terms()
    {
        $title = Config::get('custom.name') . " | Términos";
        return View::make('static.terms', compact('title'));
    }

    public function privacy()
    {
        $title = Config::get('custom.name') . " | Privacidad";
        return View::make('static.privacy', compact('title'));
    }

    public function seeder()
    {
        for ($i=0; $i < 1000; $i++) {

            $factor = mt_rand(750, 1250) / 1000;

            $product = Product::find(rand(1, 50));
            $last_price = PriceReport::where('product_id', $product->id)
                                     ->orderBy('created_at', 'desc')
                                     ->take(1)
                                     ->get();

            if ($last_price->isEmpty()) {
                $last_price = 10;
            } else {
                $last_price = $last_price->first()->price;
            }

            PriceReport::create(
                array(
                    'product_id' => $product->id,
                    'price' => $last_price * $factor,
                    'latitude' => -26.830147171010314,
                    'longitude' => -65.2021293062202,
                )
            );
        }
    }
}
