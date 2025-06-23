<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeController extends Controller
{
    //
    public function Landingpage(){
        return view("Landingpage");
    }

    public function login(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }
}
