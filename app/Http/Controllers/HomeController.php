<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;

use App\Models\Route;

use DB;

class HomeController extends Controller
{
    public function __invoke()
    {
        $areas = Area::where('areas.id', '!=', 20)
        ->orderBy('orden')->get();
        // $areas = Route::leftJoin('areas', 'routes.trip_from', '=', 'areas.id')
        // ->select('areas.nombre', 'areas.id')
        // ->where('routes.fecha_ini', '=', date('Y-m-d'))
        // ->groupBy('areas.nombre', 'areas.id')
        // ->orderBy('orden')->get();
        $areasDestination = Route::leftJoin('areas', 'routes.trip_to', '=', 'areas.id')
        ->select('areas.nombre', 'areas.id')
        ->where('routes.trip_from', '=', 1)
        ->where('routes.fecha_ini', '=', date('Y-m-d'))
        ->groupBy('areas.nombre', 'areas.id')
        ->orderBy('areas.orden')
        ->get();

        return view('home')->with(['areas' => $areas, 'areasDestination' => $areasDestination]);
    }

    public function showRoutes (Request $request){

        // Obtener los datos del formulario
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $departureDate = $request->input('departureDate');
        $returnDate = $request->input('returnDate');
        $passengers = $request->input('passengers');
        $tripType = $request->input('tripType'); // Puedes añadir un campo para el tipo de viaje

        // // Obtener el ID de la zona a partir del nombre
        // $originId = Area::where('nombre', $origin)->value('id');
    
         // Realizar la consulta para obtener los viajes disponibles
        if ($tripType == 'oneWay') {
            // Solo ida, no se tiene en cuenta el returnDate
            $viajesDisponibles = Route::where('trip_from', $origin)
                ->where('trip_to', $destination)
                ->where('fecha_ini', '<=', $departureDate)
                ->where('fecha_fin', '>=', $departureDate)
                ->where('seats_remain', '>=', $passengers)
                ->get();
        } elseif ($tripType == 'roundTrip') {
            // Ida y vuelta, mostrar primero los viajes del origin a destination
            $viajesIda = Route::where('trip_from', $origin)
                ->where('trip_to', $destination)
                ->where('fecha_ini', '<=', $departureDate)
                ->where('fecha_fin', '>=', $departureDate)
                ->where('seats_remain', '>=', $passengers)
                ->get();

            // Luego, filtrar los viajes de destination a origin
            $viajesVuelta = Route::where('trip_from', $destination)
                ->where('trip_to', $origin)
                ->where('fecha_ini', '<=', $returnDate)
                ->where('fecha_fin', '>=', $returnDate)
                ->where('seats_remain', '>=', $passengers)
                ->get();

            // Unir los resultados
            $viajesDisponibles = $viajesIda->merge($viajesVuelta);
        } else {
            // Manejar otros tipos de viaje si es necesario
        }
    
        // Puedes pasar $viajesDisponibles a la vista y mostrarlos
        return view('dashboard', ['viajes' => $viajesDisponibles]);
    }

    public function schedulesToday(){
        $schedules = DB::table('routes')
        ->join('areas', 'routes.trip_from', '=', 'areas.id')
        ->select('routes.*', 'areas.nombre as origen')
        //Que la fecha sea del dia actual
        ->where('fecha_ini', '=', now()->format('Y-m-d'))
        // ->where('fecha_ini', '=', date('Y-m-d'))
        ->get();

        return view('dashboard', ['schedules' => $schedules]);
    }

    public function areas(Request $request)
    {
        try {
            $origin = $request->input('origin');
            $areas = Route::leftJoin('areas', 'routes.trip_to', '=', 'areas.id')
            ->select('areas.nombre', 'areas.id')
            ->where('routes.trip_from', '=', $origin)
            ->where('routes.fecha_ini', 'like', '2%')
            // ->where('routes.fecha_ini', '=', date('Y-m-d'))
            ->groupBy('areas.nombre', 'areas.id')
            ->orderBy('areas.orden')
            ->get();
            //$areas = Area::all();
            return ($areas);
            } catch (\Exception $e) {
                Log::alert("Error al obtener las areas");
                // Imprimir cualquier error que se pueda estar produciendo
                dd($e->getMessage());
            }
                 
        }
}
