<?php

if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["num1"])) {

$num1= $_POST["num1"];
$num2= $_POST["num2"];
$num3= $_POST["num3"];

$expression= pow($num1,3)+($num2*$num3)-($num1/$num2);

$results = [

    "num1" => $num1,
    "num2" => $num2,
    "num3" => $num3,
    "expression" => $expression
];

echo json_encode($results);

}

?>