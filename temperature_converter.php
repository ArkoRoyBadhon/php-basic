<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="number" name="temperature" placeholder="enter temperature" required>
        <select name="operation" id="">
            <option value="celsius">Fahrenhite to Celsius</option>
            <option value="fahrenhite">Celsius to Fahrenhite</option>
        </select>
        <button type="submit">Convert</button>
    </form>
    <div id="result">
        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $temp = $_POST["temperature"];
                $oper = $_POST["operation"];
                $result = 0;
                switch ($oper) {
                    case 'celsius':
                        echo ($temp - 32) * 5/9;
                        break;
                    
                    case 'fahrenhite':
                        echo ($temp * 9/5) + 32;                        
                        break;
                    
                    default:
                        echo $result;
                        break;
                }
            }
        ?>
    </div>
</body>
</html>