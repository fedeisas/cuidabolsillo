<?php

class ProvincesController extends BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $provinces = Province::orderBy('name', 'asc')->get();
        $title = Config::get('custom.name') . " | Seleccionar Provincia";
        return View::make('provinces.index', compact('provinces', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function set($id)
    {
        $validator = Validator::make(
            array('id' => $id),
            array('id' => 'required|numeric|exists:provinces,id')
        );


        if ($validator->passes()) {
            Session::put('province_id', $id);
        }

        return Redirect::route('home');
    }
}
