<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Lifeplan;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('/dashboard');
        }else{
            return view('auth.login');
        }

    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');
        $data = User::where('email',$email)->first();
        if(!empty($data)){
                if(Auth::attempt(['email' => $email, 'password' => $password])){
                            $user = Auth::user();
                            $id = $user->id;
                            $life = Lifeplan::all()->where('user_id', $id);
                            return redirect('/dashboard');
                        }else{
                            return array('result'=>'false');
                     }
        }else{
            return array('result'=>'notfound');
        }


    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function indexregister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect('/login');
    }
}
