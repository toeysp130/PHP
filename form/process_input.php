<?php
$username = $_GET['username'];
$password = $_GET['password'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];



$sql = "INSERT INTO `member`(`id`, `username`, `password`, `firstname`, `lastname`) 
VALUES (NULL,'$username','$password','$firstname','$lastname')";
include'conn.php';
mysqli_query($conn,$sql);

header( "location: index.php" );
?>