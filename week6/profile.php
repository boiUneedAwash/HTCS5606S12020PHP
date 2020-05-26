<?php
$server = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "dt7if5fn5w2fs141";
$pwd = "rmycl3gp6mqjkscj";
$database = "yvj349jjrtc4w5h1";

$connection = new mysqli($server, $user, $pwd, $database); //create database connection
if ($connection->connect_error){
    echo $connection->connect_error;
}else{
    echo "Connection Created";
}