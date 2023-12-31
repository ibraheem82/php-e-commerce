<?php

$host = "localhost";

$dbname = "bookstore";

$user = 'root';

$pass = "";

$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if($conn){
//     echo"<h1>Connection worked</h1>";
// } else{
//     echo "<h3>Error in db connection.</h3>";
// }
?>