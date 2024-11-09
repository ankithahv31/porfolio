<?php
$host = "localhost";
$user = "root";
$password = ""; // Replace with your MySQL password if any
$database = "resume"; // Database name

// Create connection
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
