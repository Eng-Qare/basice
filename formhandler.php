<?php

// var_dump($_SERVER["REQUEST_METHOD"]);


if($_SERVER["REQUEST_METHOD"] == "POST") {


    $firstname =htmlspecialchars($_POST["firstname"]) ;
    $lastname =htmlspecialchars($_POST["lastname"]) ;
    $favouritepet =htmlspecialchars($_POST["favouritepet"]) ;

    echo "this are the date, that the user submited";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;


}