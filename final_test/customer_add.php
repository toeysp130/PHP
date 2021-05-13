<?php 
    include 'connect.php';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $promotion = $_POST['promotion'];

    $sql = "INSERT INTO `customer_detail` (`id`, `phone`, `first_name`, `last_name`, `promotion`) 
    VALUES (NULL,'$phone','$firstname','$lastname','$promotion')";

    mysqli_query($conn,$sql);
    
    $sql_balance = "INSERT INTO `customer_balance`(`phone`, `total`, `status`) 
    VALUES ('$phone','20','postpaid')";
    mysqli_query($conn,$sql_balance);

?>
<script langquage='javascript'>
window.location="customer_login.php";
</script>