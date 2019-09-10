<?php

    require_once('database_connect.php');

    $email = $_REQUEST['u_email'];
    $password = $_REQUEST['u_pwd'];
    $createAuthentication = md5(sha1($email.$password));

    $matchQuery = "SELECT * FROM baikka_table WHERE auth = '$createAuthentication' ";
    //$matchQuery = "SELECT u_email,u_pwd FROM baikka_table WHERE u_email = '$email' AND u_pwd = '$password' ";

    $runquery = mysqli_query($dbConnect,$matchQuery);
    $check = mysqli_num_rows($runquery);

    if ($runquery == true) {

        if ($check === 1) {
        setcookie("currentUser",$email,time()+(86400));
        header("location: home.php");
    }

    else {
        header("location: login.php?wrong_info");
    }
}


?>
