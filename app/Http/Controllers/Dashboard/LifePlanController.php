<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use App\CustomClass\hitung;

class LifePlanController extends Controller
{
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
            $biaya = $request->get('biaya');
            $hitung = new hitung;
            $hitung = $hitung->futureku($bulan,$biaya,'future');
            return $hitung;
        }
    }
}
