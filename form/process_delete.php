<?php
$id = $_GET['id'];
$sql = "DELETE FROM `member` WHERE `id` = $id";
include'conn.php';
mysqli_query($conn,$sql);

header( "location: index.php" );
?>