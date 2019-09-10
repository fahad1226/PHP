<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Multidimension Array</title>
    </head>
    <body>

        <?php

        $cars = array(

        array("volbo",20,28),
        array("BMW",30,40),
        array("Saab",25,28),
        array("Land Rover",44,45)

        );

        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].",sold: ".$cars[1][2]."<br>";


        ?>






    </body>
</html>
