<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = mysqli_connect($servername , $username,$password,$dbname);
if(!$conn){
    die( "failed" . mysqli_connect_error());
}

    // sql query for select data from table

    $sql = "SELECT id , stname, email, mobile FROM students";
    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
     echo "id " . $row["id"]. "Name ". $row["stname"]."Email: ". $row["email"]. "<br> Mobile: </br>". $row["mobile"] ;
        }
    }else{
        echo "no record found";
    }

    mysqli_close($conn);

?>