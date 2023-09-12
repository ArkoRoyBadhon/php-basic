<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="mark1" placeholder="enter mark1" required>
        <input type="number" name="mark2" placeholder="enter mark2" required>
        <input type="number" name="mark3" placeholder="enter mark3" required>
        
        <button type="submit">Calculate</button>
    </form>
    <div id="result">
        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $mark1 = $_POST["mark1"];
                $mark2 = $_POST["mark2"];
                $mark3 = $_POST["mark3"];
                $result = ($mark1 + $mark2 + $mark3)/3;
                echo "Your Average Mark is $result";

                echo "<br>";

                if($result >= 80){
                    echo "A";
                } else if (($result < 80) && ($result >= 70)) {
                    echo "B"; 
                } 
                else if (($result < 70) && ($result >= 60)) {
                    echo "C"; 
                } 
                else if (($result < 60) && ($result >= 50)) {
                    echo "D"; 
                } 
                else {
                    echo "F";
                }
                    
            }
        ?>
    </div>
</body>
</html>