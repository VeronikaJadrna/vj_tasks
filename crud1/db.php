<?php

$servername = "db";
$username = "veriapp";
$password = "benjamin";
$dbname = "veriapp";

//creating connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//check the connection
if ($conn->connect_error){
    die("connection failed:" .$conn->connect_error);
}





?>