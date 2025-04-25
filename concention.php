<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "form";
$conn = new mysqli($servername,$username , $password, $db_name);
if($conn->connect_error){
    die("cidba cadhaday");

}
echo ""


?>