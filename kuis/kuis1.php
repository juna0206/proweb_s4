<?php
$ganjil = [];
$genap = [];

for ($i =1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        array_push($genap, $i);
    } else {
        array_push($ganjil, $i);   
    }
}
for ($i =20; $i <= 29; $i++) {
    if ($i % 2 == 0) {
        array_push($genap, $i);
    } else {
        array_push($ganjil, $i);   
    }
}

$genap = array_reverse($genap);
$hasil=array_merge($ganjil,$genap);
echo implode( ", ",$hasil);
?>

