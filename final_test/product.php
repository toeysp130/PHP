<?php 
    $conn = new mysqli("localhost", "wat", "toey2543", "sellOnline");
    $sql_search = "SELECT * FROM `product_list`";
    $result = mysqli_query($conn,$sql_search);
    if(isset($_POST['new_product'])){
        $new_product = $_POST['new_product'];
        $type_product = $_POST['type_product'];
        $quantity = $_POST['quantity'];
        $costPrice = $_POST['costPrice'];
        $SellPrice = $_POST['SellPrice'];
        $sql_insert = "INSERT INTO `product_list`(`productid`, `typeid`, `productName`, `quantity`, `costPrice`, `SellPrice`) 
        VALUES (NULL,'$type_product','$new_product','$quantity','$costPrice','$SellPrice')";

        mysqli_query($conn,$sql_insert);
        header("Refresh:0");
    }?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สินค้า</title>
</head>
<body>
<form action="#" method="post">
<center>
    <table>
        <tr>
            <td>
                การกระทำสินค้า
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
    
        <td>รหัสสินค้า</td>
        <td>ประเภทสินค้า</td>
        <td>ชื่อสินค้า</td>
        <td>จำนวน</td>
        <td>ราคาทุน</td>
        <td>ราคาขาย</td>
        <td>แก้ไขข้อมูล</td>
        <td>ลบข้อมูล</td>
        </tr>
        <tr>
        <?php while($result_ft = mysqli_fetch_assoc($result)){ ?>
        <td>
            <?php echo $result_ft['productid']?>
        </td>
        <td>
            <?php echo $result_ft['typeid']?>
        </td>
        <td>
            <?php echo $result_ft['productName']?>
        </td>
        <td>
            <?php echo $result_ft['quantity']?>
        </td>
        <td>
            <?php echo $result_ft['costPrice']?>
        </td>
        <td>
            <?php echo $result_ft['SellPrice']?>
        </td>
        <td>
            <button><a href="product_edit.php?id=<?php echo $result_ft['productid']?>">แก้ไข</a></button>
        </td>
        <td>
            <button><a href="product_delete.php?id=<?php echo $result_ft['productid']?>">ลบ</a></button>
        </td>
        </tr>
        <?php }?>
        <tr>
        
            <td colspan="8">
                เพิ่มสินค้า
                <input type="text" name="new_product" id="new_product" placeholder="ชื่อสินค้า" >
                <select name="type_product" id="">
                    <option value="1001">มือถือ พร้อมแพ็กเกจ</option>
                    <option value="1002">แท็บเล็ต</option>
                    <option value="1003">อุปกรณ์เสริม ซิม</option>
                    <option value="1004">SIM Card</option>
                    <option value="1005">สินค้าอุ่นใจ</option>
                    <option value="1006">อุปกรณ์ IOT</option>

                </select>
                <label for="quantity">จำนวน</label>
                <input type="number" name="quantity" id="quantity">
                <label for="">ราคาทุน</label>
                <input type="number" name="costPrice" id="costPrice">
                <label for="quantity">ราคาขาย</label>
                <input type="number" name="SellPrice" id="SellPrice">
                <input type="submit" value="เพิ่ม">

            </td>
            

            
        </tr>
        
        <button><a href="menu.php">กลับหน้าเมนู</a></button>
    
</center>
</form>
</body>
</html>