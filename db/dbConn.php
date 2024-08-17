<?php
// echo '3';
// die;
// $servername = "localhost"; // Replace with your server name
// $username = "u247363393_dwexchange";        // Replace with your database username
// $password = "fydqe1-zoPqur-mitcan";            // Replace with your database password
// $dbname = "u247363393_dwexchange";        // Replace with your database name
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "dwexchange";        // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// else {
//     echo 33;
// }
?>