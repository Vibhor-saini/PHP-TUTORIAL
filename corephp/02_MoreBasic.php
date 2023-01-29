<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: yellow;
        margin: auto;
    }
</style>
<body>
    
      <div class="container">
     <h1>
     lets learn about php
     </h1>
     
     <?php
     $age=7;
if($age>18){
    echo "you can go to the party";
}else if($age ==7 ){
    echo "you are 7 year old";}
    else{
    echo "you can not go to the party";
}
echo "<br>";

// Array in php

     $languages = array("python","php","nodejs");
     echo count($languages);
     echo "<br>";
     echo $languages[0];
     echo "<br>";
     echo $languages[2];
     echo "<br>";

    //  Loops in php

    // while loop
    $a=0;
    while ($a <= 10) {
       echo " The value of a is: ";
       echo $a;
       $a++;
       echo "<br>";
    }

    
    $a=0;
    while ($a < count($languages)) {
       echo " The value of language is: ";
       echo $languages[$a];
       $a++;
       echo "<br>";
    }

    // do while loop
    $a=20;
    do {
        echo "the value of a is: ";
        echo $a;
        $a++;
        echo "<br>";
    } while ($a <= 10);
    

    // for loop
    $a=10;
    for ($i=1; $i <=$a; $i++) { 
        # code...
        echo 2*$i;
        echo "<br>";
    }


    foreach($languages as $value){
        echo "<br> the value  from foreach is = ";
        echo $value;
    }

    // Function in php

    function print3(){
        echo "<br> Three";
    }
    print3();
    print3();
    print3();

    function printNum($number){
        echo "<br> Your number is ";
        echo $number;
    }
    printNum(45);
    ?>

</div>
</body>
</html>