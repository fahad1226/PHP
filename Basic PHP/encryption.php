<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Encryption</title>
    </head>
    <body>
        <?php

        $str = "Hello";
        $md = md5($str);
        echo "$md";
        echo "<br>";
        $enc1 = sha1($str);
        $enc2 = md5($enc1);
        echo "$enc1";
        echo "<br>";
        echo "$enc2";




         ?>
    </body>
</html>
