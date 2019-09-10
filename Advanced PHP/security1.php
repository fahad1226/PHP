<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>secure site</title>
    </head>
    <body>
        <form action="security2.php" method="post">
            <input type="text" name="f_name" placeholder="First Name"> <br>
            <input type="text" name="l_name" placeholder="Last Name"> <br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="number" name="age" placeholder="age"><br>
            <input type="submit" value="Register">

        </form>


        <font color = "red">

            <?php

            $err_msg = $_REQUEST['pwd_error'];
            if (isset($err_msg)) {
                echo "$err_msg<br>";
            }



            ?>


        </font>



    </body>
</html>
