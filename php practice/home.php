<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>list pof user is ..</h1>

    <?php

        require_once('connect.php');
        // if(isset($_REQUEST['success'])) {
        //     echo "succeed";
        // }
        // else {

        //     echo "failed";
        // }

        $show = "SELECT id,name , email from login";
        $run = mysqli_query($connect,$show);
        $data_counts = mysqli_num_rows($run);

        echo $data_counts;
        echo "<br>";
        
        while($data = mysqli_fetch_array($run)) {

            echo $data['id']." ";
            echo $data['name']." ".$data['email'];
            echo "<br>";
            //print_r($data);
        }

        ?>

        <button><a href="deletecore.php?id=<?php echo $data['id']; ?>"></a>Delete</button>
    
    ?>
</body>
</html>