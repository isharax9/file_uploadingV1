<?php

$mobile = $_POST["mobile"];
$profile_picture_location = $_FILES["profile_picture"]["tmp_name"];

move_uploaded_file($profile_picture_location,"uploads/".$mobile.".png");


?>