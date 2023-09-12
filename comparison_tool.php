<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="enter number 1" required>
        <input type="number" name="num2" placeholder="enter number 2" required>
        
        <button type="submit">Submit</button>
    </form>
    <div id="result">
        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                echo "<br>";
                    
                echo ($num1 > $num2) ? "largest number is $num1" : "largest number is $num2";

            }
        ?>
    </div>
</body>
</html>