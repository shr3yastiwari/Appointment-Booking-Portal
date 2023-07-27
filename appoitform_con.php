<?php
// $connec = mysqli_connect("localhost","root","","database");

// if( mysqli_connect_error() )
// {
//     echo "error";
// }else{
//     echo "mdcbSDB";
// }



$servername = "localhost";
$username = "root";
$password = "";
$database = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>