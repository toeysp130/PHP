<?php
$id = $_GET['id'];
$username = $_GET['username'];
$password = $_GET['password'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];



$sql = "UPDATE `member` SET `password`='$password',
`firstname`='$firstname',`lastname`='$lastname' WHERE `id` = $id";


include'conn.php';
mysqli_query($conn,$sql);

header( "location: index.php" );
?>