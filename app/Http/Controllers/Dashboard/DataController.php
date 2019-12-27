<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lifeplan;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function index()
    {   $user = Auth::user()->id;
        $data = Lifeplan::all()->where('user_id',$user);
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
        $user = Auth::user()->id;
        $data = Lifeplan::where('user_id',$user)->where('id',$id)->first();
        if($data == null){
            return redirect('/dashboard/data');
        }
        return view('data.detail',['data'=>$data]);
    }
}
