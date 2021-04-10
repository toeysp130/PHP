<?php 
    $id = $_GET['id'];
    $name = $_GET['name'];
    $pr = $_GET['pr'];
    $gq = $_GET['gq'];

    include 'condb.php';
    $sql = "DELETE FROM goods WHERE goosid = '$id'";
    $result = mysqli_query($conn,$sql);
    $conn->close();
    header("Location: show_good.php");
    
?>