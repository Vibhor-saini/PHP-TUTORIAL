<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating connectio with mysql
$conn = mysqli_connect($servername, $username, $password);
// Checking connection here
if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}
echo "Connection successfull";
?>