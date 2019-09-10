<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Array Testing</title>
    </head>
    <body>

        <?php

        $friends = array("Fahad","Ashim","Asif","Enan","Ishmam","Rasik");
        $friends[5] = 100;
        $friends[8] = 50;

        echo $friends[5]."<br>";
        echo count($friends)."<br>";
        $res = $friends[5] + $friends[8];
        echo $res."<br>";
        $friends_num = array(10,30,40,50,60,60);
        $sum = 0;
        for ($i=0; $i <= count($friends_num);$i++) {

            $sum = $sum + $friends_num[$i];

        }

        echo $sum."<br>";

        $new_ar = array('fahad' => 1226,'ashim'=>1224,'asif'=>1225,'rasik'=>1258);

        echo $new_ar['fahad']."<br>";

        $cars = array("Volvo", "BMW", "Toyota","Lamborgini");

        echo "I like " .$cars[0]." and i also like ".$cars[3]."<br>";

        $age = array("fahad"=>21,'abhinash'=>25,'shakib'=>21,'shirin'=>30);

        //or
        //
        // $age['fahad'] = 21;
        // $age['abhinash'] = 25;
        // $age['shirin'] = 30;
        // $age = ['shakib'] = 51;

        foreach ($age as $key => $value) {
            echo "Name is ".$key." age is ".$value;
            echo "<br>";
        }

    
        ?>

    </body>
</html>
