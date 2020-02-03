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


    public function getEdit($id)
    {
        $data = Lifeplan::find($id);
        return view('data.edit',['data'=>$data]);
    }

    public function newindex()
    {
        $user = Auth::user()->id;
        $data = Lifeplan::all()->where('user_id',$user);
        $prio =  Lifeplan::where('user_id',$user)->where('priority','=','true')->get();
        $no =  Lifeplan::where('priority','!=','true')->orWhere('priority',null)->get();
        $hasil = [];
        foreach($prio as $row){
            $hasil[] = str_replace('.','',str_replace(',00','',str_replace('Rp ','',$row->cost)));

        }

        $arr = [];
        foreach($no as $x){
            $arr[] = str_replace('.','',str_replace(',00','',str_replace('Rp ','',$x->cost)));

        }

        $hasil = "Rp ".number_format(array_sum($hasil),2,',','.');
        $result = "Rp ".number_format(array_sum($arr),2,',','.');



        return view('data.index',['data'=>$data,'hasil'=>$hasil,'result'=>$result]);
    }
}
