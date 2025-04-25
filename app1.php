<?php 

//Lab 2: Arrays
echo "Tijabo";


$name = array("yasir" , "Qare" , "khalid");
var_dump($name);
echo "<br>";

echo "second Name: ". $name[1]. "<br>";

$name[1] = "khalid";
var_dump($name);
echo "<br>";


//Lab 2: String Function

echo "string length:" . strlen("Abdulaahi  axmed"). "<br>";
echo "Word  count:" . str_word_count("Abdulaahi  axmed  qare"). "<br>";
echo "Reversed:" . strrev("Abdulaahi  axmed"). "<br>";
echo "Position of qare:" . strpos("Abdulaahi  axmed bashir", "Qare"). "<br>";
echo "Replace:" . str_replace("Abdulaahi", "ahmed", "najib ali"). "<br>";



// lab 3: Number Functions
$num = 100.77;
var_dump(is_int($num));
echo "<br>";

echo "pi Value:" .pi(). "<br>";
echo "min Value:" .min(99 , 33, 56). "<br>";
echo "max Value:" .max(99 , 33, 56). "<br>";
echo "Absolute Value:" .abs(-33). "<br>";
echo "Square Value:" .sqrt(100). "<br>";
echo "Rounded Value:" .round(99.4). "<br>";
echo "Random Value:" .rand(). "<br>";


?>