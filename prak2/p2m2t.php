<?php
include 'p2m2.php';

$math = new matematika();
$jari = 20;
$kel_lingkaran = $math->keliling_lingkaran($jari);
$luas_lingkaran = $math->luas_lingkaran($jari);

echo "Menghitung Keliling dan Luas Lingkaran<br>";
echo "Jari-Jari : ".$jari."<br>";
echo "Keliling = ".$kel_lingkaran."<br>";
echo "Luas = ".$luas_lingkaran;
?>
