<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Check Box</title>
    </head>
    <body>


        <!-- <form action="checkbox.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
            Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
            <input type="submit">

        </form> -->

        <form action="checkbox.php" method="post">

            <input type="text" name="students">
            <input type="submit">

        </form>

        <?php

        $grades = array("Sam"=>"A+","Jam"=>"B+","Ram"=>"C-");

        echo $grades[$_POST["students"]];

        ?>


        <?php
        //
        // $fruits = $_POST['fruits'];
        //
        // echo $fruits[0]."<br>";
        // echo $fruits[1]."<br>";
        // echo $fruits[2]."<br>";
        //
        //
        // ?>



    </body>
</html>
