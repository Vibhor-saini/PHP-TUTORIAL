<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

// creating conn with mysql
$conn = mysqli_connect($servername , $username , $password , $dbname);

//checking connecton here
if(!$conn){
    die ("Failed" . mysqli_error());
}

//  sql query to create table
$sql ="CREATE TABLE Client_data(
    id int AUTO_INCREMENT PRIMARY KEY,
    -- stname varchar(30) not null,
    Name varchar(30) NOT NULL ,
    Email varchar(30) not null ,
    -- mobile int(10) NOT NULL
    Message varchar(500)
    )";

    if(mysqli_query($conn , $sql)){
        echo "Table created successfully";
    }else{
         echo "Error!" . mysqli_error($conn);
    }

?>