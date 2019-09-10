<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Logging Out</title>
    </head>
    <body>
        <?php
            setcookie("currentUser"," ",time()-86400);
            header('location: logout_confirmed.php');
        ?>
    </body>
</html>
