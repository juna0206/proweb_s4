<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR BMI</title>
    <link rel="stylesheet" type="text/css" href="uts.css">
</head>
<body>
    <div class="container">
        <h2>KALKULATOR BMI</h2>
        <form method="post">
            <div>
                <label for="name">Nama :</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
            </div>
            <div>
                <label for="gender">Jenis Kelamin :</label>
                <select id="gender" name="gender" required>
                    <option value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'selected'; ?>>Laki-Laki</option>
                    <option value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'selected'; ?>>Perempuan</option>
                </select>
            </div>
            <div>
                <label for="dob">Tanggal Lahir :</label>
                <input type="date" id="dob" name="dob" required value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>">
            </div>
            <div>
                <label for="weight">Berat Badan (kg):</label>
                <input type="text" id="weight" name="weight" placeholder="Enter your weight" required value="<?php if(isset($_POST['weight'])) echo $_POST['weight']; ?>">
            </div>
            <div>
                <label for="height">Tinggi Badan (cm):</label>
                <input type="text" id="height" name="height" placeholder="Enter your height" required value="<?php if(isset($_POST['height'])) echo $_POST['height']; ?>">
            </div>
            <button type="submit" name="calculate">Hitung</button>
        </form>
        <?php
        if(isset($_POST['calculate'])) {
            $name = $_POST['name'];
            $weight = $_POST['weight'];
            $height = $_POST['height'] / 100; // Convert cm to meters
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];

            if(is_numeric($weight) && is_numeric($height) && $weight > 0 && $height > 0) {
                $bmi = $weight / ($height * $height);
                $bmiCategory = "";

                if ($bmi < 18.4) {
                    $bmiCategory = "Kekurangan bobot";
                } else if ($bmi >= 18.5 && $bmi < 22.9) {
                    $bmiCategory = "Sehat";
                } else if ($bmi >= 23 && $bmi < 24.9) {
                    $bmiCategory = "Kelebihan bobot";
                } else if ($bmi >= 25 && $bmi < 29.9) {
                    $bmiCategory = "Obesitas ";
                } else {
                    $bmiCategory = "Obesitas 1";
                }

                echo "<div id='output'>Nama:  " . $name . "<br>Jenis Kelamin:  " . ($gender == 'male' ? 'Laki-Laki' : 'Perempuan') . "<br>Tanggal Lahir:  " . $dob . "</div>";
                echo "<div id='result'>Hasil BMI Anda, ". number_format($bmi, 2) . " (" . $bmiCategory . ")</div>";
            } else {
                echo "<div id='result'>Please enter valid weight and height.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
