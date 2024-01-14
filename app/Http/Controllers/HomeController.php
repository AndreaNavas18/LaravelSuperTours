<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;

class HomeController extends Controller
{
    public function __invoke()
    {
        $areas = [
            1 => [
                'nombre' => 'Desarrollo',
                'id' => 1
            ],
            2 => [
                'nombre' => 'Diseño',
                'id' => 2
            ],
            3 => [
                'nombre' => 'Marketing',
                'id' => 3
            ],
            4 => [
                'nombre' => 'Ventas',
                'id' => 4
            ],
            5 => [
                'nombre' => 'Administración',
                'id' => 5
            ]
            ];
        return view('home')->with(['areas' => $areas]);
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
