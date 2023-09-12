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
        <select name="operation" id="">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="mul">Multiply</option>
            <option value="div">Division</option>
        </select>
        <button type="submit">Convert</button>
    </form>
    <div id="result">
        <?php

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $oper = $_POST["operation"];
                switch ($oper) {
                    case 'add':
                        echo $num1 + $num2;
                        break;
                    
                    case 'sub':
                        echo $num1 - $num2;                       
                        break;

                    case 'mul':
                        echo $num1 * $num2;                       
                        break;

                    case 'div':
                        echo $num1 / $num2;                       
                        break;
                    
                    default:
                        echo "something went wrong";
                        break;
                }
            }
        ?>
    </div>
</body>
</html>