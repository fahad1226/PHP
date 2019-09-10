<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Input Something</title>
    </head>
    <body>

        <form action="input.php" method="post">
            First Name: <input type="text" name="name1">
            <br>
            Last Name: <input type="text" name="name2">
            <br>
            Age : <input type="number" name="age">
            <br>
            Address: <input type="text" name="Address">
            <input type="submit">
        </form>
        <br>

        <?php

        echo "your name is ". $_POST["name1"]."<br>";
        echo $_POST["name2"]."<br>";
        echo $_POST["age"]."<br>";
        echo $_POST["Address"]."<br>";

        ?>

    </body>
</html>
