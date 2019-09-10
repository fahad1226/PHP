<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Date Time</title>
    </head>
    <body>
        <?php

        date_default_timezone_set('Asia/Dhaka');
        echo date("d M Y h:i")."<br>";
        require_once('index.php');
        echo $name;
        //other option for this gmp_jacobi
        //1.require_once(fast kaj kore)
        //2.include_once()
        //3.require()


        ?>
    </body>
</html>
