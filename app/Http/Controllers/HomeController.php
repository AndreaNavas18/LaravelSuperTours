<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Programacion;
use App\Models\Reserva;
use App\Models\ReservasTripPuesto;
use App\Models\Route;

use Illuminate\Support\Facades\Log;

use DB;

class HomeController extends Controller
{
    // array de destinos desautorizados
    protected  $idDesautorizados = array(
        1 => [2],
        21 => [2],
        2 => [1, 21],
        3 => [], 4 => [], 5 => [], 6 => [], 7 => [], 8 => [], 9 => [], 10 => [], 11 => [], 12 => [], 13 => [], 14 => [], 15 => [], 16 => [], 17 => [], 18 => [], 19 => [], 20 => [], 21 => [], 22 => [],
        4 => [3],
        17 => [7,8,9,10,12],
        6 => [4,7,8,10,11,12],
        7 => [17,8,10,11,12],
        8 => [17],
        10 => [14,15,16,17],
        12 => [17,13,14,15,16],
        14 => []
    );

    public function __invoke()
    {
        $areas = Area::where('areas.id', '!=', 20)
        ->orderBy('orden')->get();
        // $areas = Route::leftJoin('areas', 'routes.trip_from', '=', 'areas.id')
        // ->select('areas.nombre', 'areas.id')
        // ->where('routes.fecha_ini', '=', date('Y-m-d'))
        // ->groupBy('areas.nombre', 'areas.id')
        // ->orderBy('orden')->get();
        $areasDestination = Route::join('areas', 'routes.trip_to', '=', 'areas.id')
        ->select('areas.nombre', 'areas.id')
        ->where('routes.trip_from', '=', 1)
        ->whereNotIn('routes.trip_to', $this->idDesautorizados[1])
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
        //Log::info($request->all());
        $daysOfWeek = [
            'Monday' => 'lunes',
            'Tuesday' => 'martes',
            'Wednesday' => 'miercoles',
            'Thursday' => 'jueves',
            'Friday' => 'viernes',
            'Saturday' => 'sabado',
            'Sunday' => 'domingo'
        ];
        $dayDeparture = date('l', strtotime($departureDate));
        $dayReturn = date('l', strtotime($returnDate));
        
         // Realizar la consulta para obtener los viajes disponibles
        if ($tripType == 'oneWay') {
            // Solo ida, no se tiene en cuenta el returnDate
            $viajesDisponibles = Route::select('routes.*', 'af.nombre as origen', 'at.nombre as destino')
                ->join('areas as at', 'routes.trip_to', '=', 'at.id')
                ->join('areas as af', 'routes.trip_from', '=', 'af.id')
                ->where('trip_from', $origin)
                ->where('trip_to', $destination)
                ->where('fecha_ini', '<=', $departureDate)
                ->where('fecha_fin', '>=', $departureDate)
                //->where('seats_remain', '>=', $passengers)
                ->get();
                $daySpanish = $daysOfWeek[$dayDeparture];
                foreach ($viajesDisponibles as $viaje) {
                    $tripAvilable = Programacion::select('programacion.estado', 't.'.$daySpanish)
                        ->join('trips as t', 'programacion.trip_no', '=', 't.trip_no')
                        ->where('programacion.trip_no', $viaje->trip_no)
                        ->where('programacion.fecha', date('m-d-Y', strtotime($departureDate)))
                        ->get();
                    if (isset($tripAvilable[0]->estado) && isset($tripAvilable[0]->$daySpanish) 
                        && $tripAvilable[0]->estado == 1 && $tripAvilable[0]->$daySpanish == 1) {
                        $viaje->tripAvilable = true;
                    } else {
                        $viaje->tripAvilable = false;
                    }
                    $passengersAvailable = Reserva::where('trip_no', $viaje->trip_no)
                        ->where('fecha_salida', $departureDate)
                        ->sum('pax');
                    $passengersUsing = ReservasTripPuesto::where('trip_to', $viaje->trip_no)
                        ->where('fecha_trip', $departureDate)
                        ->sum('cantidad');
                    $viaje->passengersOcuped = $passengersUsing + $passengersAvailable;
                }
        } elseif ($tripType == 'roundTrip') {
            // Ida y vuelta, mostrar primero los viajes del origin a destination
            $viajesIda = Route::where('trip_from', $origin)
                ->where('trip_to', $destination)
                ->where('fecha_ini', '<=', $departureDate)
                ->where('fecha_fin', '>=', $departureDate)
                //->where('seats_remain', '>=', $passengers)
                ->get();

            // Luego, filtrar los viajes de destination a origin
            $viajesVuelta = Route::where('trip_from', $destination)
                ->where('trip_to', $origin)
                ->where('fecha_ini', '<=', $returnDate)
                ->where('fecha_fin', '>=', $returnDate)
                //->where('seats_remain', '>=', $passengers)
                ->get();

            // Unir los resultados
            $viajesDisponibles = $viajesIda->merge($viajesVuelta);
        } else {
            // Manejar otros tipos de viaje si es necesario
        }
        $response = array(
            'status' => 'success',
            'msg' => 'Viajes disponibles',
            'viajes' => $viajesDisponibles,
            'fecha_server' => now()->format('Y-m-d'),
        );
        
        // Puedes pasar $viajesDisponibles a la vista y mostrarlos
        return $response;
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
            $areas = Route::join('areas', 'routes.trip_to', '=', 'areas.id')
                ->select('areas.nombre', 'areas.id')
                ->where('routes.trip_from', '=', $origin)
                ->whereNotIn('routes.trip_to', $this->idDesautorizados[$origin])
                // ->where('routes.fecha_ini', 'like', '2%')
            // ->where('routes.fecha_ini', '=', date('Y-m-d'))
                ->groupBy('areas.nombre', 'areas.id')
                ->orderBy('areas.orden')
                ->get();
                Log::info("Si estoy trayendo los destinos");
            //$areas = Area::all();
            return ($areas);
            } catch (\Exception $e) {
                Log::alert("Error al obtener las areas");
                // Imprimir cualquier error que se pueda estar produciendo
                dd($e->getMessage());
            }         
    }
}
