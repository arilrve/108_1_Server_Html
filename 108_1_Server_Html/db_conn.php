<?php
header("Access-Control-Allow-Origin: *");
$link = mysqli_connet(
    "locoalhost",
    "s107021039",
    "Xoofo3ab",
    "s107021039"
);
if(!$link){
    echo "Error:unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno:" . mysqli_connet_errno() . PHP_EOL;
    echo "Debugging errno:" .mysqli_connect_errno() . PHP_EOL;
    exit;
}

$link -> set_charset("utf8");