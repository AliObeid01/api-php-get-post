<?php

$Holiday= $_GET["Holiday"];

$Holidaytime =strtotime($Holiday);

$today=time();

$secs= $Holidaytime - $today;

$days = $secs / 86400;

$results = [

    "days-left" => ceil($days),
    
];

echo json_encode($results);

?>
