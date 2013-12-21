<?php

class AuthController extends BaseController
{

    public function getLogin()
    {
        $title = Config::get('custom.name') . " | Login";
        return View::make('auth.login', compact('title'));
    }

    public function postLogin()
    {
        $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));

        if (Auth::attempt($credentials)) {
            return Redirect::to('admin');
        } else {
            return Redirect::route('auth.login.get')
                           ->with('message', 'Credenciales incorrectas.')
                           ->withInput();
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('home');
    }
}
