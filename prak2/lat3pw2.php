<?php
class Balok {
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($panjang, $lebar, $tinggi) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function luasPermukaan() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }

    public function volume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

class Bola {
    private $jariJari;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    public function luasPermukaan() {
        return 4 * pi() * pow($this->jariJari, 2);
    }

    public function volume() {
        return (4 / 3) * pi() * pow($this->jariJari, 3);
    }
}

class NilaiHuruf {
    private $nilaiAngka;

    public function __construct($nilaiAngka) {
        $this->nilaiAngka = $nilaiAngka;
    }

    public function nilaiHuruf() {
        if ($this->nilaiAngka >= 85 && $this->nilaiAngka <= 100) {
            return 'A';
        } elseif ($this->nilaiAngka >= 75 && $this->nilaiAngka < 85) {
            return 'B';
        } elseif ($this->nilaiAngka >= 65 && $this->nilaiAngka < 75) {
            return 'C';
        } elseif ($this->nilaiAngka >= 50 && $this->nilaiAngka < 65) {
            return 'D';
        } else {
            return 'E';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['balok'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
        $balok = new Balok($panjang, $lebar, $tinggi);
        echo "Luas Permukaan Balok: " . $balok->luasPermukaan() . "<br>";
        echo "Volume Balok: " . $balok->volume() . "<br>";
    } elseif (isset($_POST['bola'])) {
        $jariJari = $_POST['jariJari'];
        $bola = new Bola($jariJari);
        echo "Luas Permukaan Bola: " . $bola->luasPermukaan() . "<br>";
        echo "Volume Bola: " . $bola->volume() . "<br>";
    } elseif (isset($_POST['nilaiHuruf'])) {
        $nilaiAngka = $_POST['nilaiAngka'];
        $nilaiHuruf = new NilaiHuruf($nilaiAngka);
        echo "Nilai Huruf: " . $nilaiHuruf->nilaiHuruf() . "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Geometri dan Nilai Huruf</title>
    <link rel="stylesheet" type="text/css" href="pw2.css">
</head>
<body>
    <h2>Kalkulator Luas dan Volume Balok</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Panjang:</label>
        <input type="number" name="panjang" required><br>
        <label>Lebar:</label>
        <input type="number" name="lebar" required><br>
        <label>Tinggi:</label>
        <input type="number" name="tinggi" required><br>
        <input type="submit" name="balok" value="Hitung">
    </form>

    <h2>Kalkulator Luas dan Volume Bola</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Jari-jari:</label>
        <input type="number" name="jariJari" required><br>
        <input type="submit" name="bola" value="Hitung">
    </form>

    <h2>Konversi Nilai Angka ke Nilai Huruf</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Nilai Angka:</label>
        <input type="number" name="nilaiAngka" required><br>
        <input type="submit" name="nilaiHuruf" value="Konversi">
    </form>
</body>
</html>