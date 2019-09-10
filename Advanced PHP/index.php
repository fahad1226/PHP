
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Home Page</title>
    </head>
    <body>

        <form action="welcome.php" method="post">

            Username:<input type="text" name="username"><br>
            Comment: <textarea name="comment" rows="8" cols="80"></textarea>
            <input type="submit">

        </form>

        <form action="welcome.php" enctype="multipart/form-data" method="post">
            <input type="file" name="dp">
            <input type="submit" value="upload">
        </form>

        <?php

        $name = 'fahad';
        ?>
    </body>
</html>
