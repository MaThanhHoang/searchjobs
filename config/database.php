<?php

$servername = "mysql-26002-0.cloudclusters.net";
$username = "hoang";
$password = "Hoang2506";
$database = "searchjobs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>