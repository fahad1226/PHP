<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>While Loops</title>
    </head>
    <body>

        <?php

        $index = 1;
        while ($index<=10) {
            echo "numbers are ".$index."<br>";
            $index++;
        }

        for ($i=0; $i <5; $i++) {
            echo $i." this is i <br>";
            for ($j=0; $j <4; $j++) {
                echo $j." this is J <br>";
                for ($k=0; $k <3; $k++) {
                    echo $k." this is k <br>";
                    for ($z=0; $z <3; $z++) {
                        echo $z."this is z<br>";
                    }
                }
            }
        }


        ?>


    </body>
</html>
