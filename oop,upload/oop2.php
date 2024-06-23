<?php
class mobil{
	//property:public, private
	public $roda = 4;
	private $pintu = 2;
	//method
	function __construct(){
		echo '<br><br><b>Turunan class mobil</b>';
	}
	function nama_mobil($pabrikan,$nama){
		echo '<br>Nama mobil: '.$pabrikan.' '.$nama;
	}
	function jml_pintu(){
		echo '<br>Jumlah pintu: '.$this->pintu;
	}
	function jml_roda(){
		echo '<br>Jml roda: '.$this->roda;
	}
}

class sepeda_motor extends mobil {
	public $roda = 2;
	function bbm(){
		echo '<br>Jenis BBM: Bensin';
	}
}

$vario = new sepeda_motor();
$vario->nama_mobil('Honda','Vario');
//echo $vario->roda;
//echo $vario->pintu;
$vario->jml_roda();
$vario->bbm();

$sedan = new mobil();
$sedan->nama_mobil('Toyota','Vios');
//echo '<br>Jumlah roda sedan: '.$sedan->roda;
$sedan->jml_roda();
//echo '<br>Jumlah pintu: '.$sedan->pintu;
$sedan->jml_pintu();


$truk = new mobil();
$truk->nama_mobil('Mercedes','Truk');
$sedan->roda = 6;
//echo '<br>Jumlah roda truk: '.$sedan->roda;
$truk->jml_roda();

$bus = new mobil();
?>