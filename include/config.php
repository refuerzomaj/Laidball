<?php
// Attempt MySQL server connection
$con = mysqli_connect('localhost', 'root', '', 'real_estate');

// Check connection
if (!$con) {
    // If connection fails, display an error message and exit
    die("Connection failed: " . mysqli_connect_error());
}
?>