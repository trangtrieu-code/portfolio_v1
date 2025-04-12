<?php
$servername = "trangtrieu.com";
$database = "u234171025_porfolio_db";
$username = "u234171025_trangtrieu";
$password = "W8h0@!u&|";
 
// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error());
 
}
echo "Connected successfully";
mysqli_close($conn);
?>