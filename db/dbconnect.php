<?php
$servername = "localhost";
$username = "";
$password = "";
$db = "f6team8_exsplitz";
// Create connection
global $conn;
$conn= mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}