<?php
$name = "akshit is a very hardworking guy";
echo "<br>";
//here we use "." operator to concatenate the string
echo "The lenght of my string is " . strlen($name);
echo "<br>";
//word count
echo "The lenght of my string is " . str_word_count($name);
echo "<br>";
//to reverse string
echo "the  reversed string is " . strrev($name);
//to search inside string
echo "<br>";
echo "is at the positon " . strpos($name, "is");
//replace function
echo "<br>";
echo str_replace("akshit", "Rohan", $name);
// to repeat the string,n number of times
echo "<br>";
echo str_repeat($name, 4) . "<br>";
//trim function 
//rtrim= to remove extra sapces from  right side.
//ltrim=to remove extra spaces from left side.
//pre tag show the function as it is
echo "<br>";
echo "<pre>";
echo ltrim("        this is a good boy      ");
echo "</pre>";
