<?php

    require_once('database_connect.php');

    if (!empty($_REQUEST['fname']) && !empty($_REQUEST['lname']) && !empty($_REQUEST['u_email']) && !empty($_REQUEST['u_pwd']) && !empty('adress') || !empty($_REQUEST['city']) ) {

        $fname = htmlentities($_REQUEST['fname']);
        $lname = htmlentities($_REQUEST['lname']);
        $u_email = htmlentities($_REQUEST['u_email']);
        $u_pwd = $_REQUEST['u_pwd'];
        $address = htmlentities($_REQUEST['address']);
        $city = htmlentities($_REQUEST['city']);
        $encryptedpwd = md5(sha1($u_pwd));
        $authen = md5(sha1($u_email.$u_pwd));


        $insertQuery = "INSERT INTO baikka_table (fname,lname,u_email,u_pwd,auth,address,city) VALUES('$fname','$lname','$u_email','$encryptedpwd','$authen','$address','$city')";
        $runquery = mysqli_query($dbConnect,$insertQuery);
        if ($runquery==true) {

            header("location: login.php?action=true");
        }
        else {
            header("location: registration.php?action=false");
        }
    }

?>
