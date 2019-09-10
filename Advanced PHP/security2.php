<?php


$first_name = $_REQUEST['f_name'];
$last_name = $_REQUEST['l_name'];
$pass = $_REQUEST['password'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$password_len_check = strlen($pass);
$f_name_len_check = strlen($first_name);
if ($password_len_check <= 4) {

    header("Location: security1.php?pwd_error=password is too short",true,301);
    exit();
}
elseif ($f_name_len_check <= 4) {
    header("Location: security1.php?pwd_error=username is too short",true,301);
}
else {

    $scr_fname = htmlspecialchars(ltrim($first_name));
    echo "welcome $scr_fname $last_name<br>";
    echo "your email is $email<br>";
    echo "your age is $age<br>";
}
?>
