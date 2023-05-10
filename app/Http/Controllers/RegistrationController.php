<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;
//use Cartalyst\Sentinel;

class RegistrationController extends Controller
{
    //
    public function register(){
        return view('register');
    }
    public function postregister(Request $request){
        $user = Sentinel::registerAndActivate($request->all());
        return redirect('register');
    }
}

