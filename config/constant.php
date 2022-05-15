<?php
session_start();
define('SITURL','http://localhost:8080/learn/');
define('LOCALHOST','localhost');    
define('DB_USERNAME','root');
define('DB_PASSWORD', '');
define('DB_NAME','school');
$connect =mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD,DB_NAME)or die(mysqli_error());
if (!$connect) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
echo "Connected successfully";
?>