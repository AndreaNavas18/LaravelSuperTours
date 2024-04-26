<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    //funcion para cargar la pagina 
    public function destinations()
    {
        return view('destinations');
    }

}
