<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core Php</title>
</head>
<body>
    <div class="contaimer">
        this is my first php
        <?php

        define('pi' , 3.14);
        echo "Hello this is priented using php";

        // Single line comment
        /*
        This is a multiline comment!
        */

        echo $var1=35;
        echo $var2=36;
        Echo $var3=86;
        
        echo $var1 + $var2;

        $var4 = $var1 + $var2;
        echo $var4;
        echo "<br>";

        //Operators in php

        //Aithmtic Operators

        echo " the value of variable1 + variable2 is ";
        echo "<br>";
        echo $var1 + $var2;
        echo "<br>";

        echo " the value of variable1 - variable2 is ";
        echo "<br>";
        echo $var1 - $var2;
        echo "<br>";
        echo " the value of variable1 * variable2 is ";
        echo "<br>";
        echo $var1 * $var2;
        echo "<br>";
        echo " the value of variable1 / variable2 is ";
        echo "<br>";
        echo $var1 / $var2;
        echo "<br>";

        //Assignment Operators

        //Comparison Operators
        echo " the value of 1==4 is";
        echo "<br>";
        echo var_dump(1==4);
        echo "<br>";

        //Increment/Decrement Operators
        echo $var1++;
        echo "<br>";
        echo $var1;
        echo $var1--;
        echo "<br>";
        echo $var1;
        echo "<br>";
        echo ++$var1;
        echo "<br>";
        echo --$var1;
        echo "<br>";

        //Logical Operator

        // and(&&)
        // or(||)
        // xor(!)

        // $myvar= (true) and (true);
        // echo "<br>";
        // echo var_dump($myvar);

        // $myvar= (false) and (true);
        // echo "<br>";
        // echo var_dump($myvar);

        // $myvar1= (false or true);
        // echo "<br>";
        // echo var_dump($myvar1);

        // $myvar1= (true xor true);
        // echo "<br>";
        // echo var_dump($myvar1);

        // $myvar1= (false xor true);
        // echo "<br>";
        // echo var_dump($myvar1);

        ?>
        
        <?php 

        //Data Type

        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Object
        // 6. Array

        echo "<h4> Data Type </h4>";

        $var = "my name is vibhor";
        echo var_dump($var);
        echo "<br>";

        $var = 45;
        echo var_dump($var);
        echo "<br>";

        $var = 45.6;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        echo pi;
        ?>

        
    </div>
</body>
</html>