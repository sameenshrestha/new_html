<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "php_class_db";
//Create Connection
$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Sucessfully";