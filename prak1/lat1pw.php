<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="lat1.css">
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type="number" name="angka1" required value="<?php if(isset($_POST['angka1'])) echo $_POST['angka1']; ?>">
        <input type="number" name="angka2" required value="<?php if(isset($_POST['angka2'])) echo $_POST['angka2']; ?>">
        <select name="operator" required>
            <option value="tambah" <?php if(isset($_POST['operator']) && $_POST['operator'] == "tambah") echo "selected"; ?>>+</option>
            <option value="kurang" <?php if(isset($_POST['operator']) && $_POST['operator'] == "kurang") echo "selected"; ?>>-</option>
            <option value="kali" <?php if(isset($_POST['operator']) && $_POST['operator'] == "kali") echo "selected"; ?>>*</option>
            <option value="bagi" <?php if(isset($_POST['operator']) && $_POST['operator'] == "bagi") echo "selected"; ?>>/</option>
        </select>
        <input type="submit" value="Hitung">
        <?php
        if(isset($_POST['hasil'])) {
            echo '<output type="number" name="hasil" value="' . $_POST['hasil'] . '">';
        } else {
            echo '<output type="number" name="hasil" value="">';
        }
        ?>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    echo "Pembagian dengan nol tidak dapat dilakukan.";
                }
                break;
            default:
                echo "Operator tidak valid.";
                break;
        }

        echo "<h3>Hasil: $hasil</h3>";
    }
    ?>
</body>
</html>
