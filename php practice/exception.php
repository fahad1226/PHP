<?php

    function Test($value) {

        if ($value > 1) {
            throw new Exception("value must be 1 or below");
        } else {
            return true;
        }
        
    }


    function TadaysDate() {
        echo date('d/m/y');
    }

    try {
        Test(23);
        echo "If you see this,this number is one or blow<br>";
    }

    catch(Exception $e) {
        echo "Message: ".$e->getMessage();
    }

    echo "<br>";

    TadaysDate();
?>