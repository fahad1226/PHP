
<?php require_once('header.php'); ?>
<?php require_once('database_connect.php'); ?>
<?php

    if (!isset($_COOKIE['currentUser'])) {
        header("location: login.php");
    }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Profile</title>
        <?php require_once("base.php"); ?>
    </head>
    <body>
        <div class="container">
            <h2>Users Profile</h2>

            <?php

            $dbmail = $_COOKIE['currentUser'];
            $all_data = "SELECT * FROM baikka_table WHERE auth = '$dbmail'";
            $runquery = mysqli_query($dbConnect,$all_data);
            while ($getData = mysqli_fetch_array($runquery)) {
                //echo "<pre>" . var_dump($getData) . "</pre>";
                echo "<br>";
                echo $getData['fname']." ".$getData['lname'];
                $image = $getData['dp'];
                echo "<br>";
                echo "<img src='Images/$image.png'>";
            }

            ?>

        </div>


        <?php require_once('footer.php'); ?>

    </body>
</html>
