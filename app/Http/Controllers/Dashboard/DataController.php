<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lifeplan;
use App\CustomClass\hitung;
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
    public function hitung(Request $request)
    {
        if($request->get('hitung')){
            $bulan = $request->get('bulan');
            $bulan = $bulan/12;
            $biaya = str_replace('.','',$request->get('biaya'));
            $hitung = new hitung;
            $hitungdatang = $hitung->futureku($bulan,$biaya,'future');
            $hitung = $hitungdatang/$request->get('bulan');
            $hitung = round($hitung);
            $hitung = intval($hitung);
            $rupiah = "Rp ".number_format($hitung,2,',','.');
            $biaya = "Rp ".number_format($biaya,2,',','.');
            $datang = round($hitungdatang);
            $datang = "Rp ".number_format($datang,2,',','.');
            $this->tanggal = $request->get('date');
            $tanggal = $this->tanggal;
            $this->save =   array('bulan' => $request->get('bulan'),
                            'biaya' => $biaya,
                            'inflasi' => '6%',
                            'perbulan' => $rupiah,
                            'nama' => $request->get('nama'),
                            'biayadatang' => $datang,
                            'date' => $tanggal,
                            'id'=>$request->get('id')
                     );
            return $this->save;


        }
    }

    public function getUpdate(Request $request)
    {

        $plan = Lifeplan::find($request->get('id'));
        $plan->name = $request->get('nama');
        $plan->cost = $request->get('biaya');
        $date = strtotime($request->get('date'));
        $date = date('Y-m-d',$date);
        $plan->month = $request->get('bulan');
        $plan->date = $date;
        $plan->inflation = $request->get('inflasi');
        $plan->per_month = $request->get('perbulan');
        $plan->upcoming_costs = $request->get('biayadatang');
        $plan->save();
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
