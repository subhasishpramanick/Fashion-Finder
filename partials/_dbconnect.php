<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "fashionfinder";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo 'error';
}
?>