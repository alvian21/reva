<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use App\Lifeplan;
use Illuminate\Support\Facades\Auth;
use App\CustomClass\hitung;

class LifePlanController extends Controller
{
    var $save;
    var $tanggal;
    public function index()
    {
        return view('lifeplan.index');
    }

    public function fetch(Request $request)
    {
        if($request->get('date')){
          $date = $request->get('data');
          $date = strtotime($date);
          $year1 = date('Y',$date);
          $year2 = date('Y');
          $month1 = date('m',$date);
          $month2 = date('m');
          $diff = (($year1 - $year2) * 12) + ($month1 - $month2);

          echo $diff;

        }
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
                            'date' => $tanggal
                     );
            return $this->save;


        }
    }


    public function savedata(Request $request)
    {

        $userid = Auth::user()->id;
        $plan = new Lifeplan;
        $plan->user_id = $userid;
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
     public function cekbox(Request $request)
     {
         if($request->get('cekbox')){
             $data = Lifeplan::find($request->get('id'));
             $data->priority = $request->get('cek');
             $data->save();

             return $data;

         }
     }


     public function fetchcek()
     {
        $data = Lifeplan::all();
        $hasil = '';
        foreach($data as $row){

        }
     }
}
