<?php
$conn = new mysqli("localhost", "wat", "toey2543", "sellOnline");
    $id = $_REQUEST['id'];
    $sql_search = "SELECT * FROM `product_list` WHERE productid = '$id'";
    $result = mysqli_query($conn,$sql_search);
    $result_ft = mysqli_fetch_assoc($result);
    if(isset($_POST['submit'])){
        $productName = $_POST['productName'];
        $type_product = $_POST['type_product'];
        $quantity = $_POST['quantity'];
        $costPrice = $_POST['costPrice'];
        $SellPrice = $_POST['SellPrice'];
        $sql_update = "UPDATE `product_list` SET `typeid`= '$type_product' ,`productName`='$productName' ,`quantity`='$quantity'
        ,`costPrice`='$costPrice',`SellPrice`='$SellPrice' WHERE productid = '$id'";
        mysqli_query($conn,$sql_update);
        header("location: product.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้สินค้า</title>
</head>
<body>
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
    <table border="1"><tr>
        <td>รหัสสินค้า</td>
        <td>ประเภทสินค้า</td>
        <td>ชื่อสินค้า</td>
        <td>จำนวน</td>
        <td>ราคาทุน</td>
        <td>ราคาขาย</td>
        </tr>
        <tr>
        <td>
            <?php echo $result_ft['productid']?>
        </td>
        <td>
            <select name="type_product" id="">
                <option value="<?php echo $result_ft['typeid']?>"><?php echo $result_ft['typeid']?></option>
                <option value="1001">มือถือ พร้อมแพ็กเกจ</option>
                <option value="1002">แท็บเล็ต</option>
                <option value="1003">อุปกรณ์เสริม ซิม</option>
                <option value="1004">SIM Card</option>
                <option value="1005">สินค้าอุ่นใจ</option>
                <option value="1006">อุปกรณ์ IOT</option>
            </select>
        </td>
        <td>
            <input type="text" name="productName" id="" value=" <?php echo $result_ft['productName']?>">
        </td>
        <td>
            <input type="number" name="quantity" id="" value="<?php echo $result_ft['quantity']?>">
        </td>
        <td>
            <input type="number" name="costPrice" id="" value="<?php echo $result_ft['costPrice']?>">
        </td>
        <td>
            <input type="number" name="SellPrice" id="" value="<?php echo $result_ft['SellPrice']?>">
        </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="บันทึกข้อมูล" name="submit">
            </td>
        </tr>
    </table>
</center>
</form>
</body>
</html>