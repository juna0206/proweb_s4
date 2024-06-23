<!DOCTYPE html>
<html>
<head>
    <title>konversi nilai mata kuliah</title>
    <link rel="stylesheet" type="text/css" href="lat2.css">
</head>
<body>
    <h2>konversi nilai mata kuliah</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nilai">Nilai Angka: </label>
        <input type="text" id="nilai" name="nilai" required value="<?php if(isset($_POST['nilai'])) echo $_POST['nilai']; ?>">
        <input type="submit" value="konversi"> 
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
        $nilai = $_POST["nilai"];
        if (!is_numeric($nilai)) {
            echo "<h3>Nilai harus berupa bilangan numerik</h3>";
        } else {
            $nilai = floatval($nilai);
            if ($nilai >= 3.5) {
                echo "<h3>Nilai Anda: A</h3>";
            } elseif ($nilai >= 3.0) {
                echo "<h3>Nilai Anda: B</h3>";
            } elseif ($nilai >= 2.5) {
                echo "<h3>Nilai Anda: C</h3>";
            } elseif ($nilai >= 2.0) {
                echo "<h3>Nilai Anda: D</h3>";
            } else {
                echo "<h3>Nilai Anda: E</h3>";
            }
        }
    }
    ?>
</body>
</html>