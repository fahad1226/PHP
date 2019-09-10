<?php

    function Name(&$n1,&$n2,&$n3) {
        $n1 = ucfirst(strtolower($n1));
        $n2 = ucfirst(strtolower($n2));
        $n3 = ucfirst(strtolower($n3));
        echo "$n1"."<br>";
        echo "$n2"."<br>";
        echo "$n3"."<br>";
    }

    $name1 = "Fahad";
    $name2 = "asif";
    $name3 = "shajid";
    Name($name1,$name2,$name3);




    function Git_Er_Matha() {
        $var1 = "Git";
        $var2 = "Hub";
        $eksathe = $var1 . $var2;
        echo $eksathe;
    }

    Git_Er_Matha();








?>
