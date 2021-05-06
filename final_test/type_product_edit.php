<?php

use function PHPSTORM_META\type;

    include'connect.php';
    $id = $_REQUEST['id'];
    $sql_search = "SELECT * FROM `product_type` WHERE id_type = '$id'";
    $result = mysqli_query($conn,$sql_search);
    $result_ft = mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){
        $new_val = $_POST['new_val'];
        $sql_update = "UPDATE `product_type` SET `name_type`= '$new_val' WHERE id_type = '$id'";
        mysqli_query($conn,$sql_update);
        header("location: type_product.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประเภทสินค้า</title>
</head>
<body>
<form action="#" method="post">
<center>
    <table border="1">
        <tr>
        <td>
            <?php echo $result_ft['id_type']?>
        </td>
        <td>
            <input type="text" name="new_val" id="" value="<?php echo $result_ft['name_type']?>">
        </td>
        <td>
            <input type="submit" value="บันทึกข้อมูล" name="submit">
        </td>
        </tr>
    </table>
</center>
</form>
</body>
</html>