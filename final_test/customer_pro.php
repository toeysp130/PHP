<?php 
    include 'connect.php';
    $phone = $_POST['phone'];
    $promotion = $_POST['promotion'];

    $sql = "UPDATE `customer_detail` SET `promotion`='$promotion' WHERE `phone` = '$phone'";
    mysqli_query($conn,$sql);
    
?>

<script langquage='javascript'>
window.location="customer_page.php?phone=<?php echo $phone?>";
</script>
