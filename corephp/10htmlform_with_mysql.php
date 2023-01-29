<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<style>
    .errorColor {color: red;}
</style>
<body>

<?php

$nameError = $emailError = "";
$name = $email = $message = $done = "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameError = "Name is mandatory";
    }else{
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameError = "Only letters allowed";
        }
}



if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $emailError = "Email is mandatory";
    }else{
        $email = test_input($_POST["email"]);
        // check if email address is well formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError = "Only letters allowed";
    }
}


if(empty($_POST["message"])){
    $message = "";
}else{
    $message = test_input($_POST["message"]);
}
$done = test_input($_POST["done"]);
}

}


function test_input($data){       //for data clarification
$data = trim($data);
$data = stripcslashes($data);
$data = htmlspecialchars($data);
return $data;
}

// Create connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die(" Connection failed" . mysql_connect_error());
}

// sql query to insert data in INQUERY_table

$sql = "INSERT INTO inquiry_table (name, email, message) VALUES ('$name' , '$email', '$message')";

mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<!-- Creating a form -->
<h2>PHP Form With Validation</h2>

    <p> <span class="errorColor">* mandatory field</span></p>
    <form method="post" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Name: <input type="text" name="name">
    <span class="errorColor">*<?php echo $nameError; ?></span>
    <br><br>
    

    Email: <input type="text" name="email" >
    <span class="errorColor">* <?php echo $emailError; ?></span>
    <br><br>

    Message: <textarea name="message" cols="24" rows="6"></textarea>
    <br><br>
    <input type="hidden" name="done" value="Message sent successfully">
    <input type="Submit" name="submit" value="submit">
</form>


    <?php

    if($nameError=="Name is mandatory"){
        echo "Error";
    }else{
       echo $done;
    }
    ?>



</body>
</html>