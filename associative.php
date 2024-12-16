<?php
//associative array 
$arr = array("this", "that", 'what');
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";

//Assocaitave array
//keys can be integer here
$favcol = array("akshit" => "macbookair", "piyu" => "hp15", "shanubhaiya" => "acerswift", 6 => "meow");
echo $favcol["akshit"];
echo "<br>";
echo $favcol[6];
//for loop in php 
foreach ($favcol as $key => $value) {
    echo "the key value pair are $key = $value";
    echo "<br>";
}
