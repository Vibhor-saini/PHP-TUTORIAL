<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername , $username,$password,$dbname);

if(!$conn){
    die("failed" .mysqli_connect_error());
}

$sql = "SELECT id, stname,email FROM students WHERE mobile = '99'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
    echo "id " . $row["id"]. "Name ". $row["stname"]. "Email: ". $row["email"] ;
    }
    }else{
        echo "no record found";
    }


mysqli_close($conn);
?>