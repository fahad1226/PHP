<?php

$db_username = "fahadbinmnr";
$db_pass = "1234";


$u_name = $_REQUEST['username'];
$password = $_REQUEST['password'];


echo " <h1>Database Info</h1> <br>";
echo "<strong>Username is</strong> $db_username";
echo "<br>";
echo "<strong>Password is </strong> $db_pass";
echo "<br>";
echo "<hr>";

echo "<h1>Users Info</h1><br>";

// echo $u_name."<br>";
// echo $password;


if ($db_username == $u_name && $db_pass == $password) {

    echo "welcome to facemash<br>";
    //header("location: http://www.google.com/");
    echo "your username is $u_name <br>";
    echo "and your password is $password<br>";
}

else {
    echo "Invalid username or password<br>";
    echo " <a href='login.php'>Login Again</a> ";
    echo "<br>";

}
echo "<hr>";




?>
