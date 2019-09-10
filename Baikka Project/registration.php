<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <?php require_once("base.php"); ?>

</head>

<body>
    <div class="container ">
        <h1 class="text-muted py-2 welcome">Welcome To Baikka Application</h1>
        <form action="insert_data.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4"></label>
                    <input type="text" name="fname" class="form-control" id="firstn" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4"></label>
                    <input type="text" name="lname" class="form-control" id="lastn" placeholder="Last Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4"></label>
                    <input type="email" name="u_email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4"></label>
                    <input type="password" name="u_pwd" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress"></label>
                <input type="text" name="address" class="form-control" id="adrs" placeholder="Address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity"></label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
        </form>
    </div>
</body>

</html>
