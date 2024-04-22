<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usersclients;

use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{

    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request) {
        DB::beginTransaction();
        $user = new Usersclients();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->zip = $request->zipcode;
        $user->celphone = $request->celphone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if (!$user->save()) {
            DB::rollBack();
            Log::info("Error al insertar el registro");
            return redirect()->back();
        }

        DB::commit();
        Log::info('Registro insertado correctamente');
        return redirect()->route('home');

    }

    // public function register(Request $request){
    //         // Validación de datos
    //         $request->validate([
    //             'email' => ['required', 'email', 'unique:users_clients'],
    //             'password' => ['required', 'min:6'],
    //         ]);
    
    //         $cliente = UsersClients::create([
    //             'firstname' => $request->input('firstname'),
    //             'lastname' => $request->input('lastname'),
    //             'address' => $request->input('address'),
    //             'city' => $request->input('city'),
    //             'state' => $request->input('state'),
    //             'country' => $request->input('country'),
    //             'zip' => $request->input('zipcode'),
    //             'celphone' => $request->input('celphone'),
    //             'email' => $request->input('email'),
    //             'password' => bcrypt($request->input('password')),
    //         ]);
           
    //         // Guardar el nuevo cliente en la base de datos
    //         if(!$cliente) {
    //             DB::rollBack();
    //             Alert::error('Error', 'Error al insertar registro.');
    //             Log::info("Error al insertar registro");
    //             return redirect()->route('auth.register');
    //         }else {
    //             DB::commit();
    //             Alert::success('¡Éxito!', 'Registro insertado correctamente');
        
    //             return redirect()->route('auth.register');
    //         }

    //     }

  
}
