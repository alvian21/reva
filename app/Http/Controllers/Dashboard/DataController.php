<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lifeplan;

class DataController extends Controller
{
    public function index()
    {
        $data = Lifeplan::all();
        return view('data.index',['data'=>$data]);
    }
}
