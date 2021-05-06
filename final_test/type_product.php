<?php 
    $conn = new mysqli("localhost", "wat", "toey2543", "sellOnline");
    $sql_search = "SELECT * FROM `product_type`";
    $result = mysqli_query($conn,$sql_search);
    if(isset($_POST['new_type'])){
        $new_type = $_POST['new_type'];
        $sql_insert = "INSERT INTO `product_type`(`id_type`, `name_type`) VALUES (NULL,'$new_type') ";
        mysqli_query($conn,$sql_insert);
        header("Refresh:0");
    }?>
    
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
    <table>
        <tr>
            <td>
                การกระทำประเภทสินค้า
            </td>
            <td>
                เพิ่ม
            </td>
            <td>
                ลบ
            </td>
            <td>
                แก้ไข
            </td>
        </tr>
    </table>
    <form action="#" method="post">
    <table border="1">
    <?php while($result_ft = mysqli_fetch_assoc($result)){ ?>
        <tr>
        <td>
            <?php echo $result_ft['id_type']?>
        </td>
        <td>
            <?php echo $result_ft['name_type']?>
        </td>
        <td>
            <button><a href="type_product_edit.php?id=<?php echo $result_ft['id_type']?>">แก้ไข</a></button>
        </td>
        <td>
            <button><a href="type_product_delete.php?id=<?php echo $result_ft['id_type']?>">ลบ</a></button>
        </td>
        </tr>
        <?php }?>
        <tr>
            <td colspan="2">
                <label for="new_type">เพิ่มประเภทสินค้า</label>
                <input type="text" name="new_type" id="new_type" >
                <input type="submit" value="เพิ่ม">
            </td>
        </tr>
    </table>
    <button><a href="menu.php">กลับหน้าเมนู</a></button>

    
</center>
</form>
</body>
</html>