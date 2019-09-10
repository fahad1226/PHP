<?php

    if (isset($_COOKIE['currentUser'])) {

        header("location: home.php");
    }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <?php require_once("base.php"); ?>
</head>

<body>

    <div class="container py-4">
        <h1 class="text-muted">Login Now</h1>
    <form action="login_confirmed_core.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="u_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="u_pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <br>
    <br>


    <?php

    if (isset($_REQUEST['wrong_info'])) {
        ?>
            <h4 id="wrong"></h4>
        <script>

            $(document).ready(function(){

                alert("WRONG INFORMATION!");

            });



        </script>

        <?php
    }

    ?>

    </div>


</body>

</html>
