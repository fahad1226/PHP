
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>File Handling</title>
    </head>
    <body>
        <form action="file_handle.php" method="post">
            whats in your mind? <textarea name="file" rows="8" cols="80"></textarea>
            <input type="submit" value="Post">
        </form>

    <?php

        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        // $txt = $_POST['file'];
        // fwrite($myfile, $txt);
        $txt = $_POST['file'];
        fwrite($myfile, $txt)."<br>";
        echo readfile('newfile.txt')."<br>";
        fclose($myfile);

    ?>

    </body>
</html>
