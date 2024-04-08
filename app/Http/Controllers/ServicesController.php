<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //funcion para cargar la pagina 
    public function services()
    {
        return view('services');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

}
