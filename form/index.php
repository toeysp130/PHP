<?php 
    include'conn.php';
    $sql = "SELECT * FROM `member`";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="1">
        <tr>
            <td>
                ID
            </td>
            <td>
                ชื่อ
            </td>
            <td>
                นามสกุล
            </td>
        </tr>
        <?php 
        $row = 1;
        while($arr_result = mysqli_fetch_array($result)){ 
        ?>
        <tr>
            <td>
                <?php echo $arr_result['id'];?>
            </td>
            
            <td>
                <?php echo $arr_result['firstname']?>
            </td>
            
            <td>
                <?php echo $arr_result['lastname']?>
            </td>
            <td>
                <button><a href="update.php?id=<?php echo $arr_result['id']?>">แก้ไข</a></button>
                
            </td>
            <td>
                <button><a href="process_delete.php?id=<?php echo $arr_result['id']?>">ลบ</a></button>
            </td>
        </tr>
    <?php $row++;}?>
    </table>
    <button><a href="input.php">เพิ่มข้อมูล</a></button>
</body>
</html>