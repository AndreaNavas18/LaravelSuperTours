<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersClients;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use DB;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin() {
        Log::info("holaaaaa");
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials =  [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){

            return redirect()->intended(route('home'));
            
        }else {
            return redirect('register');
            Log::info("No ingreso");
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }

}