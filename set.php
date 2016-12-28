<?php
$port = $_GET["port"];
$red = $_GET["red"];
$green = $_GET["green"];
$blue = $_GET["blue"];
exec('sudo /root/set.sh ' . $port . ' ' . $red . ' ' . $green . ' ' . $blue);
?>
