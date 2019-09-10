<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Database</title>
    </head>
    <body>
        <?php

            $host = "localhost";
            $dbUser = "Fahad_CSE";
            $dbPwd = "pkwTDQdLKMywSJEp";
            $dbName = "baikka_database";
            $dbConnect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);
            if ($dbConnect == true) {
                echo "<h3>connected to the database</h3>";
            }

        ?>


    </body>
</html>
