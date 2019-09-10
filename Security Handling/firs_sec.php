<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

            $integer = 9999;
            $validate = filter_var($integer,FILTER_VALIDATE_INT);
            if ($validate) {
                echo "this is valid integer";
            }
            else {
                echo "this is not a valid integer";
            }

        ?>

        


    </body>
</html>
