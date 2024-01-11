<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = "crud";

$conn = new mysqli($host, $user, $password, $database);

if(!$conn){
    die(mysqli_error($conn));
}

?>