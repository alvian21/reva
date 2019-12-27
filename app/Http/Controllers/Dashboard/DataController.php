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

    public function delete(Request $request)
    {
        if($request->get('delete')){
            $data = Lifeplan::find($request->get('id'));
            $data->delete();
        }
    }


    public function detail($id)
    {
        $data = Lifeplan::find($id);
        return view('data.detail',['data'=>$data]);
    }
}
