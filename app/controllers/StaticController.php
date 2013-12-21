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
}
