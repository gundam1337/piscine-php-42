<?php
$file = "../img/42.png";
$type = "image/png";
header('Content-Type: image/png');
header("Content-Type: ".filesize($file));
readfile($file);
?>