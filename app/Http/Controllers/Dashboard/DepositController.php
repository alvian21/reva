<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lifeplan;

class DepositController extends Controller
{
    public function index()
    {
        $data = Lifeplan::all();
        return view('nabung.index',['data'=>$data]);
    }


    public function fetchdata()
    {
        $echo = '';
        $echo .= ' <table class="profit-loss report-table table" id="date-profit-lost">
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

                        </td>
                 </tr>
                   <tr>
                        <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                            Biaya saat ini
                          </td>
                          <td class="report-subtotal text-right" id="assets-type-1-total-data">
                          </td>
                          <td class="border-top-thin" id="hasilbiaya" style="padding-left:80px;">

                          </td>
                   </tr>
                   <tr>
                        <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                            Tercapai Dalam
                          </td>
                          <td class="report-subtotal text-right" id="assets-type-1-total-data">
                          </td>
                          <td class="border-top-thin" id="hasiltercapai" style="padding-left:80px;">

                          </td>
                   </tr>

                   <tr>
                        <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                       Biaya yang akan datang
                        </td>
                          <td class="report-subtotal text-right" id="assets-type-1-total-data">
                          </td>
                          <td class="border-top-thin" id="hasildatang" style="padding-left:80px;">

                          </td>
                   </tr>
                   <tr>
                        <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                          Perkiraan perbulan
                          </td>
                          <td class="report-subtotal text-right" id="assets-type-1-total-data">
                          </td>
                          <td class="border-top-thin" id="perbulan" style="padding-left:80px;">

                          </td>
                   </tr>
        </tbody>
    </table>';
    }
}
