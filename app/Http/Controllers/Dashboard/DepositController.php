<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lifeplan;
use Illuminate\Support\Facades\Auth;
use DateTime;
use DateInterval;
use DatePeriod;
use App\Deposit;

class DepositController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $data = Lifeplan::all()->where('user_id',$user);
        return view('nabung.index',['data'=>$data]);
    }


    public function fetchdata(Request $request)
    {
        $echo = '';
        $data = Lifeplan::find($request->get('id'));
        $echo .= ' <table class="profit-loss report-table table" id="date-profit-lost">

                <input type="hidden" name="id" id="id" value="'.$data->id.'">

        <thead class="report-header">
            <tr>
                <th colspan="2">
             LifePlan
                </th>
            <th></th>

            </tr>
        </thead>
        <tbody>
                <tr>
                      <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                          Nama LifePlan
                        </td>
                        <td class="report-subtotal text-right" id="assets-type-1-total-data">
                        </td>
                        <td class="border-top-thin" id="hasilnama" name="hasilnama" style="padding-left:80px;">
                        '.$data->name.'
                        </td>
                 </tr>

                   <tr>
                        <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                            Tercapai Dalam
                          </td>
                          <td class="report-subtotal text-right" id="assets-type-1-total-data">
                          </td>
                          <td class="border-top-thin" id="hasiltercapai" style="padding-left:80px;">
                          '.$data->month.' bulan
                          </td>
                   </tr>

                   <tr>
                        <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                       Biaya yang akan datang
                        </td>
                          <td class="report-subtotal text-right" id="assets-type-1-total-data">
                          </td>
                          <td class="border-top-thin" id="hasildatang" style="padding-left:80px;">
                          '.$data->upcoming_costs.'
                          </td>
                   </tr>
                   <tr>
                        <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                          Perkiraan perbulan
                          </td>
                          <td class="report-subtotal text-right" id="assets-type-1-total-data">
                          </td>
                          <td class="border-top-thin" id="perbulan" style="padding-left:80px;">
                          '.$data->per_month.'
                          </td>
                   </tr>
        </tbody>
    </table>';


    echo $echo;
    }



    public function date()
    {
        $curdate=strtotime('22-12-2011');
        $mydate=strtotime('10-10-2011');

        if($curdate > $mydate)
        {
            echo '<span class="status expired">Expired</span>';
        }
    }


    public function fetchprice(Request $request)
    {
        $data = Lifeplan::find($request->get('id'));
        $money = str_replace('.','',$request->get('money'));
        $str = str_replace('Rp','',str_replace('.','',str_replace(',00','',$data->upcoming_costs)));
        $hasil = floatval($str) - floatval($money);
        $hasil = "Rp ".number_format($hasil,2,',','.');

        $array = '';
        if($str > $money){
         $array = array(
                'month' => $data->month,
                'result' => $hasil,
                'button'=> false
            );
        }elseif($str < $money){
            $array = array(
                'month' => $data->month,
                'result' => 'maximum',
                'button'=> true
            );
        }

        elseif($str = $money){
            $array = array(
                'month' => $data->month,
                'result' => '0',
                'button'=> false
            );
        }

        return $array;


    }

  public function savedata(Request $request)
  {

      if($request->get('menabung')){
        $user = Auth::user();
        $data = new Deposit;
        $data->user_id = $user->id;
        $data->lifeplan_id = $request->get('id');
        $strmoney = str_replace('.','',$request->get('money'));
        $data->data = $strmoney;
        $strkurang = str_replace(',00','',str_replace('.','',str_replace('Rp ','', $request->get('less'))));
        $data->less = $strkurang;
        $data->inflation = '6%';
        $data->month = $request->get('month');

        return $data;
      }



  }

}
