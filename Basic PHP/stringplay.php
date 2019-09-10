<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php programming</title>
    </head>
    <body>

        <?php

        $country = "Bangladesh";

        echo "$country<br>";
        echo strtolower($country);
        echo "<br>";
        echo strtoupper($country);
        echo "<br>";
        echo strlen($country);

        echo $country[0];
        echo "<br>";
        $name = "Fahad Bin Munir";
        $stmt = "I love programming more than anything in the world";
        $name[4] = "S";
        echo $name[0];echo $name[1];echo $name[2];echo $name[3];echo $name[4];
        echo "<br>";
        echo str_replace("Bangladesh","England",$country);
        echo "<br>";
        echo substr($name,6,3);
        echo "<br>";
        echo strlen("I live in a village");
        echo "<br>";
        echo str_word_count("I Love Bangladesh very much");
        echo "<br>";
        echo strrev("Believe me");
        echo "<br>";
        echo strpos("welcome dude","dude");
        echo "<br>";
        echo ucwords($stmt);
        echo "<br>";
        echo str_repeat("Fahad ",5);
        echo "<br>";
        echo strcmp("Fahad","Bill");//true 1
        echo "<br>";
        echo strcmp("Fahad","Fahad");//false 0
        echo "<br>";
        $com = "microsoft";
        echo trim($com,"microsoft");
        ?>

    </body>
</html>
