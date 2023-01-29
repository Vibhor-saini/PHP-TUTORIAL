<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername , $username,$password,$dbname);

if(!$conn){
    die("failed" .mysqli_connect_error());
}

$sql = "UPDATE students SET stname = 'sunil' WHERE id='5'";
if(mysqli_query($conn, $sql)){
    echo "update";
}else{
    echo "not update" . mysqli_error();
}

mysqli_close($conn);

?>