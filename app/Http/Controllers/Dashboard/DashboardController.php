<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lifeplan;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $prio =  Lifeplan::where('user_id',$user)->where('priority','=','true')->get();
        return view('index',['prio'=>$prio]);
    }
}
