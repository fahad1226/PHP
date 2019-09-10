<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
    <body>

        <form action="nice_calc.php" method="post">

            Enter First Number: <input type="number" step="0.000001" name="num1"><br>
            Operator: <input type="text" name="op"><br>
            Enter Second Number: <input type="number" step="0.00001" name="num2"><br>

            <input type="submit">

        </form>

        <?php

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];

        if ($op == '+') {
            echo $num1 + $num2;
        }
        elseif ($op == '-') {
            echo $num1 - $num1;
        }
        elseif ($op == '/') {
            echo $num1 / $num2;
        }
        elseif ($op == '*') {
            echo $num1 * $num2;
        }
        else {
            echo "youre doing wrong";
        }

        ?>

    </body>
</html>
