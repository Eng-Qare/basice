<!DOCTYPE html>
<html>
<body>
<!-- <p>Using comments to ignore parts of a code line:</p> -->

<style>

body{
    background-color: whitesmoke;
    color: green;
}


</style>

<main>


<form action="formhandler.php" method="POST">

    <label for="firstname">firstname?</label>
    <input id="firstname" type="text" name="firstname" placehoder="firstname">
     <br>

<label for="lastname">lastname?</label>
<input id="lastname" type="text" name="lastname" placehoder="lastname">

<br>

<label for="favouritepet">favouritepet?</label>
<br>


<select  id="favouritepet" name="favouritepet">

    <option value="none">None</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="bird">Bird</option>
</select>

<button type="submit">submit</button>



</form>
</main>





<!-- 

// $X = 5 /* + 15 */ + 5;

// echo $X;
/*
The next statement will
print a welcome message
*/
// echo "Welcome Home!";

// $x = 4;
// $y = "qare";

// echo $x;
// echo"<br>";
// echo $y;

// $txt = "w3school.com";

// echo "Ilove $txt!:";

// $x = 5; 
// $y = "qare";

// var_dump($x);
// echo"<br>";
// var_dump($y);

// PHP has three different variable scopes:

//     local
//     global
//     static

// $X = 5;

// function mytest(){

//     echo"<p>Variable x inside function is: $x</p>";
// }

// mytest();
// {
//     echo"<p>Variable x outside function is: $x</p>";
// }

// function myTest() {
//     $x = 5; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
//   } 
//   myTest(); 
  
// //   using x outside the function will generate an error
//     echo "<p>Variable x outside function is: $x</p>";
    



// ?> -->
 
</body>
</html>