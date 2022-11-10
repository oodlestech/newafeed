<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "newsfeed";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Database connection failed");
}



// // Update the details below with your MySQL details
// $DATABASE_HOST = 'localhost';
// $DATABASE_USER = 'root';
// $DATABASE_PASS = '';
// $DATABASE_NAME = 'newsfeed';
// try {
//     $conn = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
// } catch (PDOException $exception) {
//     // If there is an error with the connection, stop the script and display the error
//     exit('Failed to connect to database!');
// }


?>