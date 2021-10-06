<?php

// define('LOCALHOST', 'root');
// define('DB_PASSWORD', '12345');
// define('DB_NAME', 'food-order');

//   $conn = mysqli_connect('LOCALHOST', 'DB_USERNAME', 'DB_PASSWORD') ;
//   $db_select = mysqli_select_db($conn, 'DB_NAME') ;
//   //$res = mysqli_query($conn , $sql) or die(mysqli_error());
  
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "food-order");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
?>