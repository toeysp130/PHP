

<?php 
    $id = $_GET['id'];
    $name = $_GET['name'];
    $pr = $_GET['pr'];
    $gq = $_GET['gq'];

    include 'condb.php';
    $sql = "SELECT * FROM goods WHERE goosid = '$id' ";
    UPDATE goods SET goosid ='$id',goodsName ='$name',goodsPrice='$pr ',goodQuantity='$gq' WHERE 1
    $result = mysqli_query($conn,$sql);
    $rs = mysqli_fetch_array($result);
?>