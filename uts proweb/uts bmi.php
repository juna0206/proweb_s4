<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="uts.css">
</head>
<body>
    <div class="container">
        <h2>BMI Calculator</h2>
        <form method="post">
            <div>
                <label for="weight">Weight (kg):</label>
                <input type="text" id="weight" name="weight" placeholder="Enter your weight" required>
            </div>
            <div>
                <label for="height">Height (cm):</label>
                <input type="text" id="height" name="height" placeholder="Enter your height" required>
            </div>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        <?php
        if(isset($_POST['calculate'])) {
            $weight = $_POST['weight'];
            $height = $_POST['height'] / 100; // Convert cm to meters
            
            if(is_numeric($weight) && is_numeric($height) && $weight > 0 && $height > 0) {
                $bmi = $weight / ($height * $height);
                $bmiCategory = "";

                if ($bmi < 18.5) {
                    $bmiCategory = "Underweight";
                } else if ($bmi >= 18.5 && $bmi < 24.9) {
                    $bmiCategory = "Normal weight";
                } else if ($bmi >= 24.9 && $bmi < 29.9) {
                    $bmiCategory = "Overweight";
                } else {
                    $bmiCategory = "Obese";
                }

                echo "<div id='result'>Your BMI is: " . number_format($bmi, 2) . " (" . $bmiCategory . ")</div>";
            } else {
                echo "<div id='result'>Please enter valid weight and height.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
