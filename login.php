<?php
  include("concention.php");
  if(isset($_POST['submit'])){
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $sql = "select *form login where username = '$username'  and password = '$password'";
    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $count =mysqli_num_rows($result);

  }

?>