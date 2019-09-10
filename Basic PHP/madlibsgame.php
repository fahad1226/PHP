<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Game</title>
    </head>
    <body>
        <form action="madlibsgame.php" method="get">
            Color: <input type="text" name="color">
            <br>
            Noun: <input type="text" name="noun">
            <br>
            Celebrity: <input type="text" name="celebrity">
            <input type="submit">

        </form>

        <br>


        <?php

        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $celebrity = $_GET["celebrity"];

        echo "rosses are $color <br>";
        echo "$noun is blue<br>";
        echo "I Love $celebrity<br>";


        ?>



    </body>
</html>
