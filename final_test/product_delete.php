<?php
include'connect.php';
$id = $_REQUEST['id'];
$sql_delete = "DELETE FROM `product_list` WHERE productid = '$id'";
mysqli_query($conn,$sql_delete);
header( "location: product.php" );
?>