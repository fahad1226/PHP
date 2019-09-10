<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loopnig</title>
</head>
<body>
    <h1>For Each Loop</h1>
    <?php
    $fruits = array('apple','bananna','lemon','bites');

    // foreach($fruits as $value) {
    //     echo $value." ";
    // }

    ksort($fruits);
    $ttl = count($fruits);
    
    for($i = 0; $i<=$ttl;$i++) {
        echo $fruits[$i]." ";
        echo "<br>";
    }


    ?>
</body>
</html>