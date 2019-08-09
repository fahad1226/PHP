<?php

    echo "This Is Branch B";
    echo "<br>";

    function GreetingsToBranch_B() {

        echo "Hey what is up?<br>";
        echo "This is branch B,hope for fun with me!<br>";
    }

    GreetingsToBranch_B();
    

   
    function gitDemo(&$name1,&$email1,&$id1) {

         $name = "Fahad Bin Munir";
         $email = "fahadbinmnr@gmail.com";
         $id = 1226;

        if ($name1 == $name && $email1 == $email && $id1 == $id) {
            echo "Access Granted<br>";
        } else {
            echo "Access Denied<br>";
        }
        
    }

    $namecheck = "Fahad Bin Munir";
    $emailcheck = "fahadbinmnr@gmail.com";
    $idcheck = 1226;

    gitDemo($namecheck,$emailcheck,$idcheck);
    
?>