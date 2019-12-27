<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use App\Lifeplan;
use App\CustomClass\hitung;

class LifePlanController extends Controller
{
    var $save;
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
            $this->save =   array('bulan' => $request->get('bulan'),
                            'biaya' => $biaya,
                            'inflasi' => '6%',
                            'perbulan' => $rupiah,
                            'nama' => $request->get('nama'),
                            'biayadatang' => $datang
                     );
            return $this->save;


        }
    }


    public function savedata(Request $request)
    {
        $plan = new Lifeplan;
        
    }
}
