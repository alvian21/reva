<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomClass\hitung;

class MainController extends Controller
{
    public function api($url)
    {
        $curl = curl_init();
        // curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    //     curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    //     curl_setopt($curl, CURLOPT_HEADER, 1);
    //   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
    //   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    //         "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0",
    //         "Accept: */*",
    //         "Accept-Language: en-US,en;q=0.5",
    //         "accept-encoding: gzip, deflate, br",
    //         "referer: https://www.bareksa.com/id/reksadana/online?refcode=adwords&campaign=google&gclid=CjwKCAiAob3vBRAUEiwAIbs5TizPsrq89yTnC_G3DAhRGyV6hmrlFq7-zahRhidd64kPr_b5wEENjBoCKJEQAvD_BwE",
    //         "sec-fetch-mode: cors",
    //         "x-ajax-token: 50f32c83ede0ee439739a05f273ecd42",
    //         "x-requested-with: XMLHttpRequest"

    //   ));
        // curl_setopt($curl, CURLOPT_TIMEOUT, 5);
        $result = curl_exec($curl);
        curl_close($curl);
        return json_decode($result,true);
    }


    public function bca()
    {
        $url = 'https://www.bca.co.id/api/sitecore/Marketplace/GetReksadanaKinerjaGridJsonByParam?manajerInvestasiList=N/A,PT%20Ashmore%20Asset%20Management%20Indonesia,PT%20Bahana%20TCW%20Investment%20Management,PT%20Batavia%20Prosperindo%20Aset%20Manajemen,PT%20BNP%20Paribas%20Asset%20Management,PT%20Danareksa%20Investment%20Management,PT%20Eastspring%20Investments%20Indonesia%20,PT%20First%20State%20Investments%20Indonesia,PT%20Nikko%20Securities%20Indonesia,PT%20Panin%20Asset%20Management,PT%20Schroder%20Investment%20Management%20Indonesia&reksadanaTypeList=PU&_=1575973589797';
        $url = $this->api($url);
       dd($url);
    }


    public function tanggal()
    {
        return view('date');
    }

    public function postanggal(Request $request)
    {
        $date1 = $request->get('tanggal');

        $ts1 = strtotime($date1);
        $year1 = date('Y', $ts1);
        $year2 = date('Y');
        $month1 = date('m', $ts1);
        $month2 = date('m');
        $diff = (($year1 - $year2) * 12) + ($month1 - $month2);
        // $data = new DateTime($data);
        $date1 = new DateTime($date1);
        $data2 = new DateTime(Date('Y-m-d'));
        $tahun =$data2->diff($date1)->y;

        $hitung = new hitung;
        $tipe = $request->get('hitung');

        if($tipe){
            $result = $hitung->hitungfv($tahun,$request->get('future'),$diff, $tipe);
            echo $result;
        }

    }
}
