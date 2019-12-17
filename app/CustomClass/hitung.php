<?php
namespace App\CustomClass;

$result = "";
class hitung
{
    var $a;
    var $b;
    var $d;


    function future($oprator)
    {
        switch($oprator)
        {

            case 'fv':
            $data =  pow(1.075,$this->a);
            $bagi = $this->b /$data;
            return $bagi / $this->d;
            break;

        }
    }

    function hitungfv($a, $b, $d, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->d = $d;
        return $this->future($c);
    }
}



