<?php

namespace App\Http\Controllers\ServicesController;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //funcion para cargar la pagina 
    public function services()
    {
        return view('services');
    }

}
