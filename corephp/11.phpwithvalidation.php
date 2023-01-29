
<html>
<head>
<style>
.errorColor {color: #D30000;}
</style>
</head>
<body>  
<?php
// all required variables defined here
$nameError = $emailError = "";
$name = $email = $message = $submited = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Name is mandatory";
  } else {
    $name = test_input($_POST["name"]);

    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "Only letters allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailError = "Email is mandatory";
  } else {
    $email = test_input($_POST["email"]);

    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }
    
  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
 
  $submited = test_input($_POST["submited"]);
}

function test_input($data) {
  $data = trim($data);   
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "formdb";
  
  // I am Creating a connection here with MySQL.-----------------------------
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  // I am Checking connection here. -------------------
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    

  // SQL query to inserting data in students table.------------------------------

  $sql = "INSERT INTO Client_data(name, email, message)
  VALUES ('$name', '$email', '$message')";
  
 (mysqli_query($conn, $sql)); 
    
  mysqli_close($conn);

  // Sql query for Create connection-----------------------------------

//   <?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// // Creating connectio with mysql----------------------------------
// $conn = mysqli_connect($servername, $username, $password);
// // Checking connection here
// if(!$conn){
//     die("Connection failed:" . mysqli_connect_error());
// }
// echo "Connection successfull"; 
// ?


//   sql query to create table(will be create only once)----------------------

//   $sql ="CREATE TABLE Client_data(
//   id int AUTO_INCREMENT PRIMARY KEY,
//   stname varchar(30) not null,
//   Name varchar(30) NOT NULL ,
//   Email varchar(30) not null ,
//   mobile int(10) NOT NULL
//   Message varchar(500)
//   )";

//   if(mysqli_query($conn , $sql)){
//       echo "Table created successfully";
//   }else{
//        echo "Error!" . mysqli_error($conn);
//   }
//   mysqli_close($conn);


// Sql query for delete data from the table-----------------------------------

//   $sql = "DELETE from Client_data";
//   // $sql = "TURNCATE";
//   if(mysqli_query($conn, $sql)){
//     echo "delete";
//   }else{
//     echo "not delete" . mysqli_error();
//   }
//  mysqli_close($conn);



  // Sql query for delete Table from the Database-----------------------------------
//   $sql = "DROP table Client_data";
//   // $sql = "TURNCATE";
//   if(mysqli_query($conn, $sql)){
//     echo "delete";
//   }else{
//     echo "not delete" . mysqli_error();
//   }
//  mysqli_close($conn);
  


// sql query for select data from table-----------------------------------

// $sql = "SELECT name , email, message FROM Client_data";
// $result = mysqli_query($conn , $sql);

// if(mysqli_num_rows($result) > 0){
//     while($row = mysqli_fetch_assoc($result)){
//  echo  $row["name"]. $row["email"]. $row["message"]; 
//     }
// }else{
//     echo "no record found";
// }
// mysqli_close($conn);


 // sql query for select data from table-----------------------------------
//  $sql = "SELECT id , stname, email, mobile FROM students";
//  $result = mysqli_query($conn , $sql);
//  if(mysqli_num_rows($result) > 0){
//      while($row = mysqli_fetch_assoc($result)){
//   echo "id " . $row["id"]. "Name ". $row["stname"]."Email: ". $row["email"]. "<br> Mobile: </br>". $row["mobile"] ;
//      }
//  }else{
//      echo "no record found";
//  }
//  mysqli_close($conn);
  
?>

<!-- Creating a Form -->
<h2><u>PHP Form With Validation</u></h2>
<p><span class="errorColor">* mandatory field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
  <h3>Name:</h3><input type="text" name="name">
  <span class="errorColor">* <?php echo $nameError;?></span>
  <br><br>
  
  E-mail: <input type="text" name="email">
  <span class="errorColor">* <?php echo $emailError;?></span>
  <br><br>
  
  Message: <textarea name="message" rows="6" cols="24"></textarea>
  <br><br>
  
<input type="hidden" name="submited" value="Message sent successfully"> 
<input type="submit" name="submit" value="Submit">  
</form>
<?php
if ($nameError =="Name is mandatory"){
echo "Error";
}else{
echo $submited; 
}
?>

</body>
</html>


<!-- 1. CREATE CONNECTION
2. CREATE DATABASE
3. CREATE TABLE
4. INSERT DATA
5. SELECT PARTICULAR DATA(WHERE CLAUSE) AND SHOW
6. SELECT ALL DATA AND SHOW
7. UPDATE DATA (REPLACE DATA AFTER CHOOSE PRIMARY KEY)
8. DELETE DATA(FROM PARTICULAR FIELD THROUGH PRIMARY KEY)
9. DELETE ALL DATA FROM THE DATA(DELETE FROM TABLENAME)(TURNCATE)
10. DROP TABLE FROM THE DATABASE(DROP TABLENAME) -->
