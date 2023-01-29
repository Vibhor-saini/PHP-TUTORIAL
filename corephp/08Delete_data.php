<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername , $username,$password,$dbname);

if(!$conn){
    die("failed" .mysqli_connect_error());
}

// delete particulae data-------
$sql = "DELETE FROm students WHERE id = '5'";

// delete all data from the table-------
// $sql = "DELETE from students";

if(mysqli_query($conn, $sql)){
    echo "delete";
}else{
    echo "not delete" . mysqli_error();
}

mysqli_close($conn);

?>