<?php

    require_once('connect.php');
    session_start();
    echo $_COOKIE['username'];

    echo "<br>";

    echo $_SESSION['username'];
    $naam = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];

    $insert = "INSERT INTO login (name,email,pwd) VALUES('$naam','$email','$pwd')";
    $runquery = mysqli_query($connect,$insert);
 
    if($runquery == true) {
        header("location: home.php?success");
    }
    else {

        header("location: form.php?failed");
    }


?>