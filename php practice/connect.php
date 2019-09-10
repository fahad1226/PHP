<?php

    $host = "localhost";
    $dbuser = "root";
    $dbpwd = '';
    $dbName = "test";

    $connect = mysqli_connect($host,$dbuser,$dbpwd,$dbName);


    if ($connect == false) {
        echo "something went wrong";
    } 
    
?>