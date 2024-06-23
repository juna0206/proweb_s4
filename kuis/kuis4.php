<?php

class matematika {
    function kali($x=3,$y=2){
    return $x + $y;
    }
    function bagi($x ,$y) {
    return $x - $y;
    }
    function tambah($x, $y) {
    return $x*$y;
    }
    function kurang($x, $y) { 
    return $x/$y;
    }
}
    $hitung = new matematika();
    echo "a.". $hitung->tambah(5, 2).'<br>'; 
    echo "b.". $hitung->bagi(9, 3).'<br>';
    echo "c.". $hitung->kurang(10, 2).'<br>';
?>