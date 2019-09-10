<?php

    session_start();

    $cn = require_once('database_connect.php');


    $content = $_REQUEST['post'];
    $user = $_SESSION['post_id'];
    $insertQuery = "INSERT INTO user_posts (post_id,content) VALUES('$user','$content')";
    $runQuery = mysqli_query($dbConnect,$insertQuery);
    if ($runQuery == true) {
        header("location: home.php?action=true");
    }
    else {
        header("location: home.php?action=false");
    }
?>
