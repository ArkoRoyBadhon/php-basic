<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="num" placeholder="enter Number" required>
        
        <button type="submit">Submit</button>
    </form>
    <div id="result">
        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];
                echo "Your Entered number is $num";

                echo "<br>";

                if($num%2 === 0){
                    echo "Even Number";
                } else if ($num%2 !== 0) {
                    echo "Odd Number"; 
                } else {
                    echo "something went wrong";
                }
                
                    
            }
        ?>
    </div>
</body>
</html>