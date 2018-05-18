<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopmet";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, $dbname);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}
?>
