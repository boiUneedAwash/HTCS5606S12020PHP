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

session_start();
$username = $_SESSION["username"];

$sql = "select * from Users where username='$username'";
$result = $connection->query($sql);
if ($result->num_rows == 1){
    while ($row = $result->fetch_assoc()){
        echo "<p>".$row["id"]."</p>";
        echo "<p>".$row["username"]."</p>";
        echo "<p>".$row["password"]."</p>";
        echo "<p>".$row["name"]."</p>";
    }
}