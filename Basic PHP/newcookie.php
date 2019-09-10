<?php

    $cookieName = "User";
    $cookieValue = "Fahad";
    setrawcookie($cookieName,$cookieValue,time()+(86400 * 7),"/");

    if (isset($_COOKIE[$cookieName])) {
        echo "your cookie $cookieName is set";
        echo "<br>";
        echo "your cookie value is $_COOKIE[$cookieName]";
    }
    else {
        echo "cookie is not set";
    }



?>
