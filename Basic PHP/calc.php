<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title>
    </head>
    <body>

        <form action="calc.php" method="post">

            Number One: <input type="number" name="num1">
            <br>
            Number Two: <input type="number" name="num2">
            <input type="submit">

        </form>

        <?php
        $var1 = $_POST["num1"];
        $var2 = $_POST["num2"];
        $res = $var1 + $var2;
        echo "summetion of two numbers is ".$res."<br>";

        ?>
    </body>
</html>
