<?php 
include 'header.php';
$server = "localhost";
$user = "root";
$pass = "";
$database = "book_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>