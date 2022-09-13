<?php

if (isset($_POST["password"])) {

$password= $_POST["password"];

if(!preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{12,}$^',$password))
{
   $strong='False';
}
else{

    $strong='True';
}

$results = [

    "password" => $password,
    "strong" => $strong
];

echo json_encode($results);

}

?>