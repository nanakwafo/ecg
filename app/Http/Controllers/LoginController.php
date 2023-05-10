<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Native\Facades\Sentinel;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        Sentinel::authenticate($request->all());
//        return redirect('/welcome');
        return Sentinel::check();
//        dd($request->all());
    }

    public function postlogout()
    {
        Sentinel::logout();
        return redirect('/home');
    }
}
