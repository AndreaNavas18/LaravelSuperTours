<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home');
    }

    public function areas()
    {
        try {
                $areas = Area::orderBy('orden')->get();
                //$areas = Area::all();
                return ($areas);
            } catch (\Exception $e) {
                Log::alert("Error al obtener las areas");
                // Imprimir cualquier error que se pueda estar produciendo
                dd($e->getMessage());
            }
                 
        }
}
