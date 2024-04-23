<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Student";
$port = "8080";

$conn = new mysqli($servername,$username,$password,$dbname,$port);
if($conn->connect_error){
    die("Failed".$conn->connect_error);
}
?>