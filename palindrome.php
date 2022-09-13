<?php

$string= $_GET["string"];

$reverse = strrev($string);

if($string==$reverse){

    $palindrome="YES";
}
else{

    $palindrome="NO";
}   

$results = [

    "string" => $string,
    "palindrome" => $palindrome
];

echo json_encode($results);

?>