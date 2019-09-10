<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>welcome to facemash</title>
    </head>
    <body>

        <!-- <pre>
            F
            A
            H
            A
            D
        </pre> -->
        <pre>
        <?php

        $username = $_REQUEST['username'];
        $comment = $_REQUEST['comment'];
        $dp = $_FILES['dp'];
        echo "Name is ".$username."<br>";
        echo "Comment is ".$comment."<br>";
        $size = floor($dp['size']/1024);

        //echo var_dump($dp);
        $tempname = $dp['tmp_name'];
        $filename = $dp['name'];
        echo "file name ".$dp['name'];
        echo "<br>";
        echo "file type ".$dp['type'];
        echo "<br>";
        //echo  "file size ".$size." KB<br>";
        if ($size>=1024) {
            $size = floor($size/1024);
            echo "file size ".$size." MB<br>";
        }
        else {
            echo  "file size ".floor($size)." KB<br>";
        }
        move_uploaded_file($tempname,"images/$filename");
        echo " <img src='images/$filename' >";

        ?>
        </pre>
    </body>

</html>
