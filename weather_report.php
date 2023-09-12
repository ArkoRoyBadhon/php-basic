<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="temp" placeholder="enter Tempertature" required>
        
        <button type="submit">Submit</button>
    </form>
    <div id="result">
        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $temp = $_POST["temp"];
                echo "Your Entered Temperature is $temp";

                echo "<br>";

                if($temp <= 0 ){
                    echo "It's Freezing!";
                } else if ($temp <= 20 && $temp > 0) {
                    echo "It's Cool"; 
                } else if ($temp > 20) {
                    echo "It's Warm"; 
                } else {
                    echo "something went wrong";
                }
                
                    
            }
        ?>
    </div>
</body>
</html>