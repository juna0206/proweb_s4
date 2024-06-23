<?php

class persegi{
    private $sisi =3;
    function luas($sisi){
        $luas= $sisi * $sisi;
        return $luas;
    }
    function kel($sisi){
        $luas= $this->sisi * $this->sisi * 2;
        return $luas;
    }
}

$Persegi = new persegi();
echo "luas :".$Persegi->luas(3);
echo "kel :".$Persegi->kel(3);
?>