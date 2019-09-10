<?php

    session_start();

    if ($_REQUEST['name'] == 'Fahad' && $_REQUEST['pwd'] == "1234") {
        $_SESSION['username'] = $_REQUEST['name'];
        echo "Hello ".$_SESSION['username']." youre logged in";
        echo " <a href='logout.php'>Logout</a> ";
    } else {
        die('username or password not matched');
    }
    
   
?>