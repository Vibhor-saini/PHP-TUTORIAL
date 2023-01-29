<?php
echo "this is a boy";
?>

<?php

$str = " <br> this is a string ";
$str1= "vibhor is a good boy ";
echo $str;
echo strlen($str);

echo "<br>";
$len = strlen($str);
echo " The length of the string is = " .$len . "<br> Thank you";
echo " <br>The length of the string is = " .strlen($str) . "<br> Thank you";

echo "<br>";
echo $str1= "vibhor is a good boy ";
echo " <br>The number  of words in  the string is = " .str_word_count($str1) . "<br> Thank you";

echo "<br>";
echo $str1= "vibhor is a good boy ";
echo " <br>the reversed string is = " .strrev($str1) . "<br> Thank you";

echo "<br>";
echo $str1= "vibhor is a good boy ";
echo " <br>for search position in the string is = " .strpos($str1 , "good") . "<br> Thank you";

echo $str1= "<br>vibhor is a good boy ";
echo " <br>the replace string is = " .str_replace("good", "smart",$str1) . "<br> Thank you";


?>