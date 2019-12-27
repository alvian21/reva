<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();

            return redirect('/dashboard');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function indexregister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect('/');
    }
}
