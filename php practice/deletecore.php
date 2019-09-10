<?php
    session_start();
    require_once('connect.php');

    $getId = $_REQUEST['id'];
    $_SESSION['user'] = "fahad Bin Munir";
    $dlt = "DELETE FROM LOGIN WHERE id = '$getId'";

    $run = mysqli_query($connect,$dlt);

    if($run == true) {
        header('location: home.php?deleted');
    }



?>