<?php

$host = "localhost";

$dbname = "bookstore";

$user = 'root';

$pass = "";

$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$secret_key = "sk_test_51OTaFGHuVLlFgVzxbn8bHqfVAQUkADjTuiY7pnbnw3Qa3wg8lmH903VOT6C8FllwWoVdt1jrsipBzlf8Be3QWXIL005DIeLBBg"

// if($conn){
//     echo"<h1>Connection worked</h1>";
// } else{
//     echo "<h3>Error in db connection.</h3>";
// }
?>
