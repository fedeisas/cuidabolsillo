<?php

class ListController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lists = ProductList::orderBy('name', 'asc')->get();
        $title = Config::get('custom.name') . " | Listas";
        return View::make('lists.index', compact('title', 'lists'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($hash)
    {
        $listID = Hashids::decrypt($hash)[0];
        $list = PriceReport::find($listID);

        $title = Config::get('custom.name') . " | Lista | " . $list->name;
        return View::make('lists.index', compact('title', 'list'));
    }
}
