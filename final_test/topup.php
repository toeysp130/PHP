<?php 
    include 'connect.php';
    $topup = $_POST['topup'];
    $phone = $_POST['phone'];
    $sql = "UPDATE `customer_balance` SET `total`='$topup' WHERE `phone` = '$phone'";
    mysqli_query($conn,$sql);
    
?>

<script langquage='javascript'>
window.location="customer_page.php?phone=<?php echo $phone?>";
</script>