<?php

$name = $_REQUEST['name'];

if ($name=="Fahad") {
    header("Location: http://google.com/");
}
else {
    echo "not possible";
}

?>
