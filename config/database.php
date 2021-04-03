<?php

<<<<<<< HEAD
$servername = "mysql-26002-0.cloudclusters.net";
$username = "hoang";
$password = "Hoang2506";
$database = "searchjobs";
=======
$servername = "localhost";
$username = "root";
$password = "";
$database = "a";
>>>>>>> 1f14fcc4ab8bfdcb0e3565bacd8da294cfd299bc

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, 'UTF8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


?>