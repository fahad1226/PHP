<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Function In php</title>
    </head>
    <body>

        <form action="functions.php" method="post">

            Enter the Number: <input type="number" name="num" >
            <input type="submit">
        </form>

        <?php

        function Hello($name,$age,$semester)
        {

            echo "Hello $name  your age is $age you are in $semester semster"."<br>";
        }
        Hello('fahad',21,5);


        function test(&$value)
        {
            echo $value."<br>";
        }

        $str1 = "kuddus";
        test($str1);
        $str2 = "Ashim";
        test($str2);


        function Name_Test($name = "John")
        {
            echo "name is $name";
        }


        Name_Test("Fahad");
        echo "<br>";
        Name_Test();


        function cube($num)
        {
            return $_POST['num']*$_POST['num']*$_POST['num'];
        }

        echo "<br>";


        echo "Cube of is ".cube(3);

        function Greetings()
        {
            echo "how are you dude?";
            return "have a good day boss!";
            return "how are you dude?"; // eta execute hobena,karon function er ager line e return kore dicche sob
            return "how are you noss?";// return ekbar kaj korbe..first er ta

        }
        echo "<br>";
        echo Greetings();






        ?>

    </body>
</html>
