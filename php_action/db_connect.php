<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "inventory";
$store_url = "http://localhost/inventory/inventory/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>