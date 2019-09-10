<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        $num = 10;
        $num += 10;
        echo $num;
        echo "<br>";
        $num--;
        echo $num."<br>";

        echo sqrt(25)."<br>";

        echo decbin(12346)."<br>"; //decimal to binary
        echo bindec(11000000111010); //binary to decimal
        echo "<br>";
        echo dechex(1234);
        echo "<br>";
        echo decoct(12736);
        echo "<br>";
        $number = 5;

        echo base_convert($number,10,2); // base number ke convert kore je
        echo "<br>";
        echo sin(23754)."<br>";
        echo cos(90);
        echo "<br>";
        echo sinh(23754)."<br>";
        echo pi();
        echo "<br>";
        echo exp(1);
        echo "<br>";
        echo max(10,20);
        echo "<br>";
        echo min(10,20);
        echo "<br>";
        echo rand(10,20);
        echo "<br>";
        echo mt_rand(10,20); // Generates a random integer using Mersenne Twister algorithm.
        echo "<br>";
        echo pow(2,3);
        echo "<br>";
        echo getrandmax(); //largest value ta dekhabe,integer er



        ?>
    </body>
</html>
