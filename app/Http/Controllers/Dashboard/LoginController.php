<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Deposit;
use App\Lifeplan;

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
            $id = $user->id;
            $life = Lifeplan::all()->where('user_id', $id);
            $data = Deposit::all()->where('user_id', $id);

            return redirect('/dashboard');
        }else{
            return back();
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
