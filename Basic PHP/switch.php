<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Switch Case</title>
    </head>
    <body>

        <form action = "switch.php" method="post">

            Enter your grade: <input type="text" name="grade">
            <input type="submit">

        </form>


        <?php
        $grade = $_POST['grade'];

        switch (strtoupper($grade)) {
            case 'A':
                echo "you have done amazing";
                break;
            case 'B':
                echo "You have done well";
                break;
            case 'C':
                echo "You could better in next time";
                break;

            case 'D':
                echo "you have to do better in next time";
                break;

            case 'F':
                echo "you've failed my friend";
                break;

            default:
                echo "Invalid Grade";
                break;
        }


        ?>


    </body>
</html>
