<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_server="localhost";
$db_user="root";
$db_password="123";
$db_name="login";

$mysqli=new mysqli($db_server,$db_user,$db_password,$db_name);
$conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
  echo "Connected successfully";
  
  