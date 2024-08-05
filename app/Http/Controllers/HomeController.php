<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Extension;
use App\Models\PickupDropoff;
use App\Models\Programacion;
use App\Models\Reserva;
use App\Models\ReservasTripPuesto;
use App\Models\Route;
use App\Models\Clientes;
use App\Http\Requests\RegisterRequest;
use App\Jobs\SendEmailJob;
use App\Models\NewCliente;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Mail;

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
        session()->flush();

        // Obtener los datos del formulario
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $departureDate = $request->input('departureDate');
        $returnDate = $request->input('returnDate');
        $passengers = $request->input('passengers');
        $tripType = $request->input('tripType');
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
        $viajesIda = [];
        $viajesVuelta = [];
        // Solo ida, no se tiene en cuenta el returnDate
        $viajesIda = Route::select('routes.*', 'af.nombre as origen', 'at.nombre as destino')
            ->join('areas as at', 'routes.trip_to', '=', 'at.id')
            ->join('areas as af', 'routes.trip_from', '=', 'af.id')
            ->where('trip_from', $origin)
            ->where('trip_to', $destination)
            ->where('fecha_ini', '<=', $departureDate)
            ->where('fecha_fin', '>=', $departureDate)
            ->orderBy('routes.trip_departure', 'asc')
            ->get();
        $daySpanish = $daysOfWeek[$dayDeparture];
        foreach ($viajesIda as $viaje) {
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
            $passengersOcuped = Reserva::where('trip_no', $viaje->trip_no)
                ->where('fecha_salida', $departureDate)
                ->sum('pax') + Reserva::where('trip_no', $viaje->trip_no)
                ->where('fecha_salida', $departureDate)
                ->sum('pax2') + Reserva::where('trip_no2', $viaje->trip_no)
                ->where('fecha_retorno', $departureDate)
                ->sum('pax_r') + Reserva::where('trip_no2', $viaje->trip_no)
                ->where('fecha_retorno', $departureDate)
                ->sum('pax2_r');
            $passengersUsing = ReservasTripPuesto::where('trip_to', $viaje->trip_no)
                ->where('fecha_trip', $departureDate)
                ->whereIn('estado', ['USING', 'RENEWED'])
                ->sum('cantidad');
            $totalCapacity = $viaje->capacity + $viaje->capacity2 + $viaje->capacity3 + $viaje->capacity4 + $viaje->capacity5;
            if ($totalCapacity > 0 && ($viaje->wfseats > 0 || $viaje->spseats > 0 || $viaje->sdseats > 0 || $viaje->sflexseats > 0 || $viaje->stseats > 0)) {
                $totalSeats = $viaje->wfseats + $viaje->stseats + $viaje->spseats + $viaje->sdseats + $viaje->sflexseats;
            } else {
                $totalSeats = 0;
            }
            $viaje->passengersAvailable = $totalSeats - ($passengersUsing + $passengersOcuped + $passengers);
            $viaje->passengersToReserve = $passengers;
        }
        $response = array(
            'status' => 'success',
            'msg' => 'Viajes disponibles',
            'viajes' => $viajesIda,
            'fecha_server' => date('Y-m-d'),
        );
        
        // Puedes pasar $viajesIda a la vista y mostrarlos
        return $response;
    }

    public function reserveTrip (Request $request) {
        $tripNo = $request->input('tripNo');
        $departureDate = $request->input('fecha');
        $capacity = $request->input('capacity');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $priceAdult = $request->input('priceAdult');
        $priceChild = $request->input('priceChild');
        $tripType = $request->input('tripType');
        $type = $request->input('type');
        $passengersAvailable = Reserva::where('trip_no', $tripNo)
            ->where('fecha_salida', $departureDate)
            ->sum('pax') + Reserva::where('trip_no', $tripNo)
            ->where('fecha_salida', $departureDate)
            ->sum('pax2') + Reserva::where('trip_no2', $tripNo)
            ->where('fecha_retorno', $departureDate)
            ->sum('pax_r') + Reserva::where('trip_no2', $tripNo)
            ->where('fecha_retorno', $departureDate)
            ->sum('pax2_r');
        $passengersUsing = ReservasTripPuesto::where('trip_to', $tripNo)
            ->where('fecha_trip', $departureDate)
            ->whereIn('estado', ['USING', 'RENEWED'])
            ->sum('cantidad');
        if (($passengersAvailable + $passengersUsing + $adults + $children) <= $capacity) {
            $reserva = new ReservasTripPuesto();
            $reserva->trip_to = $tripNo;
            $reserva->tipo = ($tripType == 'departure') ? 1 : 2;
            $reserva->fecha_trip = $departureDate;
            $reserva->cantidad = $adults + $children;
            $reserva->fecha_usado = now()->format('Y-m-d H:i:s');
            $reserva->usuario = rand(1000, 9999);
            $reserva->estado = 'USING';
            $reserva->fecha_actividad = now()->format('Y-m-d H:i:s');
            $reserva->tarifa = 3;
            $reserva->save();
            // Obtener el ID del registro que se acaba de crear
            $idReserva = ReservasTripPuesto::latest('id')->first()->id;
            // Guardar los datos de la reserva en la session
            $reservas = session()->get('reservas', []);
            $reservas[$idReserva] = [
                'tripType' => $type,
                'type' => $tripType,
                'tripNo' => $tripNo,
                'fecha' => $departureDate,
                'adults' => $adults,
                'children' => $children,
                'priceAdult' => ($priceAdult * $adults),
                'priceChild' => ($priceChild * $children),
                'reservaTripPuesto' => ReservasTripPuesto::find($idReserva)->toArray()
            ];
            session()->put('reservas', $reservas);
            //Log::info(session()->get('reservas', []));
            try {
                dispatch(new SendEmailJob(session()->get('reservas', [])));
            } catch (\Throwable $th) {
                Log::info($th);
            }
            $response = array(
                'idReserva' => $idReserva,
                'status' => 'success',
                'message' => 'Reserva realizada con éxito',
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Don\'t have enough seats available',
            );
        }
        return $response;
    }

    function cancelReserve(Request $request) {
       try {
           //session()->flush();
           $idReserva = $request->input('idReserva');
           $state = $request->input('state');
           $arrayReservas = explode(",", $idReserva);
           ReservasTripPuesto::whereIn('id', $arrayReservas)->update([
               'estado' => $state,
               'fecha_actividad' => now()->format('Y-m-d H:i:s')
           ]);
           Log::info($idReserva);
           if ($state == 'CANCELLED') {
               // Eliminar los datos de la reserva de la session
               $reservas = session()->get('reservas', []);
               foreach ($arrayReservas as $id) {
                   unset($reservas[$id]);
                }
                session()->put('reservas', $reservas);
            }
           Log::info(session()->get('reservas', []));
           $response = array(
               'status' => 'success',
               'message' => 'Reserva cancelada con éxito',
           );
           return $response;

        } catch (\Throwable $th) {
            Log::info($th);
        }
    }

    public function pickupDropoff (Request $request) {
        try {
            dispatch(new SendEmailJob(session()->get('reservas', [])));
        } catch (\Throwable $th) {
            Log::info($th);
        }
        $tripNo = $request->input('tripNo');
        $fecha = $request->input('fecha');
        $departure = $request->input('departure');
        $arrival = $request->input('arrival');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $priceAdult = $request->input('priceAdult');
        $priceChild = $request->input('priceChild');
        $origin = $request->input('idOrigen');
        $destination = $request->input('idDestino');
        $stopsDeparture = PickupDropoff::select('id', 'place', 'address')
            ->where('id_area', $origin)
            ->where('trip' . $tripNo, 1)
            ->orderBy('posicion')
            ->get();
        $stopsArrival = PickupDropoff::select('id', 'place', 'address')
            ->where('id_area', $destination)
            ->where('trip' . $tripNo, 1)
            ->orderBy('posicion')
            ->get();
        $extensionsDeparture = Extension::select('id', 'place', 'precio', 'precio_neto')
            ->where('id_area', $origin)
            ->where('precio_neto', '>' , 0)
            ->get();
        $extensionsArrival = Extension::select('id', 'place', 'precio', 'precio_neto')
            ->where('id_area', $destination)
            ->where('precio_neto', '>' , 0)
            ->get();

        return view('pickUp-dropOff')->with([
            'stopsDeparture' => $stopsDeparture,
            'stopsArrival' => $stopsArrival,
            'extensionsDeparture' => $extensionsDeparture,
            'extensionsArrival' => $extensionsArrival
        ]);
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
            //$areas = Area::all();
            return ($areas);
            } catch (\Exception $e) {
                Log::alert("Error al obtener las areas");
                // Imprimir cualquier error que se pueda estar produciendo
                dd($e->getMessage());
            }         
    }
    
    // funcion para enviar los datos del pick up y drop off al correo mediante una peticion post
    public function savePickDrop(Request $request){
        try {
            $data = $request->all();
            Log::info($data);
            $reservas = session()->get('reservas', []);
            foreach ($data as $key => $value) {
                $reservas[$key]['pickDrop'] = $value;
                session()->put('reservas', $reservas);
            }
            dispatch(new SendEmailJob(session()->get('reservas', [])));
            return $reservas;
        }
        catch (\Throwable $th) {
            Log::info($th);
        }
    } 

    public function ingresoInvitado(){
        return view('guest');

    }

    public function confirmPayment(){
        
            dispatch(new SendEmailJob(session()->get('reservas', [])));
            return view('formPay')->with(['reservas' => session()->get('reservas', [])]);
    }

    public function creacionInvitado(Request $request){
        try {
            $cellphone = $request->input('celphone');
            $dataUser = NewCliente::where('celphone', $cellphone)->get();
            Log::info(session()->get('reservas', []));

            if (count($dataUser) == 0) {
                $request->validate([
                    'celphone' => ['required', 'unique:new_clientes,celphone'],
                    'firstname' => ['required', 'string', 'max:255'],
                    'lastname' => ['required', 'string', 'max:255'],
                    'email' => ['nullable', 'email', 'max:255'], 
                ]);
                $guest = new NewCliente();
                $guest->firstname = $request->input('firstname');
                $guest->lastname = $request->input('lastname');
                $guest->email = $request->input('email');
                $guest->celphone = $request->input('celphone');
                $guest->save();
            }
            $commenst = 'firstname: ' . $request->input('firstname') . ', ';
            $commenst .= 'lastname: ' . $request->input('lastname') . ', ';
            $commenst .= 'email: ' . $request->input('email') . ', ';
            $commenst .= 'celphone: ' . $request->input('celphone') . ', ';
            $commenst2 = '';

            $passengersAditionals = $request->all();
            unset($passengersAditionals['_token']);
            unset($passengersAditionals['firstname']);
            unset($passengersAditionals['lastname']);
            unset($passengersAditionals['email']);
            unset($passengersAditionals['celphone']);

            foreach ($passengersAditionals as $key => $value) {
                if (strpos($key, 'Departure') !== false && isset($value)) {
                    $commenst .= "$key: $value, ";
                }
                if (strpos($key, 'Return') !== false && isset($value)) {
                    $commenst2 .= "$key: $value, ";
                }
            }
            $reservas = session()->get('reservas', []);
            foreach ($reservas as $key => $value) {
                if ($value['type'] == 'departure') {
                    $reservas[$key]['passengersAditionals'] = $commenst;
                } else {
                    $reservas[$key]['passengersAditionals'] = $commenst2;
                }
                session()->put('reservas', $reservas);
            }
            dispatch(new SendEmailJob(session()->get('reservas', [])));
            return redirect()->route('confirmInformation');
        } catch (\Throwable $th) {
            //throw $th;
            Log::info($th);

        }
    }

    public function confirmInformation(){
        return view('confirmInformation')->with(['reservas' => session()->get('reservas', [])]);
    }

    public function reserve(Request $request){
         try {
            $data = $request->all();
            Log::info($data);
            session()->flush();
            return Session::all();
        } catch (\Throwable $th) {
            Log::info($th);
        }
        
    }

    // public function register(Request $request){
    //     // Validación de datos
    //     $request->validate([
    //         'email' => ['required', 'email', 'unique:new_clientes'],
    //         'password' => ['required', 'min:6'],
    //     ]);

    //     $cliente = new NewCliente();
    //     $cliente->firstname = $request->input('firstname');
    //     $cliente->lastname = $request->input('lastname');
    //     $cliente->address = $request->input('address');
    //     $cliente->city = $request->input('city');
    //     $cliente->state = $request->input('state');
    //     $cliente->country = $request->input('country');
    //     $cliente->zip = $request->input('zipcode');
    //     $cliente->celphone = $request->input('celphone');
    //     $cliente->email = $request->input('email');
    //     $cliente->password = bcrypt($request->input('password'));
       
    //     // Guardar el nuevo cliente en la base de datos
    //     $cliente->save();

    //     return redirect()->route('login')->with('success', 'Usuario registrado con éxito');
    // }


    // public function login(Request $request){

    //     if (Auth::attempt([
    //         'username'   => $request->input('username'),
    //         'password' => $request->input('password'),
    //     ])) {
    //         return redirect()->route('home')->with('success', 'Bienvenido ' . Auth::user()->firstname);

    //     }else {
    //         Log::info("No estan correctas las credentials");
    //     }

    // }
}