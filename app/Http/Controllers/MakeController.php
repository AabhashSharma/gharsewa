<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeController extends Controller
{
    //
    public function Landingpage(){
        return view("Landingpage");
    }


    public function Faq(){
        return view("Faq");
    }


     public function TermsAndCondition(){
        return view("TermsAndCondition");
    }

    public function Home(){
        return view("Home");
    }


    public function Aboutus(){
        return view("Aboutus");
    }

    public function Contactus(){
        return view("Contactus");
    }

    public function Service(){
        return view("Service");
    }

    public function CleaningPackage(){
        return view("CleaningPackage");
    }

    public function PlumbingPackage(){
        return view("PlumbingPackage");
    }

    public function ElectricalPackage(){
        return view("ElectricalPackage");
    }

    public function DevicePackage(){
        return view("DevicePackage");
    }

    public function login(){
        return view("auth.login");
    }

    public function register(){
        return view("auth.register");
    }
}
