<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = mysqli_connect($servername , $username, $password,$dbname);
if(!$conn){
    die("Failed" . mysqli_connect_error());
}

// inserting data into table
$sql = "INSERT INTO students (stname, email, mobile) value ('Himanshuh' , 'him@gmail.com' ,'99')";

if(mysqli_query($conn, $sql)){
    echo "New record insert succesfully";
}else{
    echo "error" . mysqli_error();
}

mysqli_close($conn);
?>