<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating connectio with mysql
$conn = mysqli_connect($servername, $username, $password);    //for create connection

// Checking connection here
if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}
// echo "Connection successfull";



// SQL query to create database through php
$sql = "CREATE DATABASE formdb";       // for create database
// Checking connection here

if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}else{
    echo "Error! " . mysqli_error($conn);
}
mysqli_close($conn);
?>
