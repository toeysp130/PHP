<?php
include'connect.php';
$id = $_REQUEST['id'];
$sql_delete = "DELETE FROM `product_type` WHERE id_type = '$id'";
mysqli_query($conn,$sql_delete);
header( "location: type_product.php" );
?>