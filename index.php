<?php

$x = $_POST["x"];
$y = $_POST["y"];
$f = $_FILES["f"]["tmp_name"];

echo($x);
echo($y);
echo($f);

move_uploaded_file($f,"uploads/a.jpeg")

?>