<?php
	/*echo "Mobil Tesla";
	echo "Mobil Esemka";
	echo "Mobil mobilan";*/

	class mobil{
		//jenis method: public, protected, private
		public $roda = 4;
		private $bbm = 'bensin';

		function __construct(){
			echo "<br><b>Turunan class mobil</b>";
		}

		function jenis_mobil($nama){
			echo "<br>Mobil ".$nama;
		}

		function jenis_bbm(){
			echo "<br>Jenis BBM: ".$this->bbm;
		}

		function jumlah_roda(){
			echo "<br>Jumlah roda: ".$this->roda;
		}
	}

	class motor extends mobil {
		public $roda = 2;

		function kapasitas($cc){
			echo "<br>Kapasitas ".$cc."CC";
		}
	}

	$vario = new motor();
	$vario->jenis_mobil('Honda');
	$vario->jumlah_roda();
	$vario->kapasitas('125');

	$car = new mobil();
	$car->jenis_mobil('Tesla');
	//echo " Jumlah Roda: ".$car->roda;
	$car->roda = 6;
	$car->jumlah_roda();
	//echo " Jenis BBM: ".$car->bbm;
	$car->jenis_bbm();
	//$car->kapasitas('4000');

	$mobil_mahal = new mobil();
	$mobil_mahal->jenis_mobil('BMW');
	$mobil_mahal->jumlah_roda();
?>