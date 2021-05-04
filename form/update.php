<?php 
    include'conn.php';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM `member` WHERE `id` = '$id'";
    $result = mysqli_query($conn,$sql);
    $arr_result = mysqli_fetch_assoc($result);
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
    <form action="process_update.php" method="get">
        <table align="center">
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" disabled name="username" id="" value="<?php echo $arr_result['username']?>">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="password" id="" value="<?php echo $arr_result['password']?>">
                </td>
            </tr>
            <tr>
                <td>
                    ชื่อ
                </td>
                <td>
                    <input type="text" name="firstname" id="" value="<?php echo $arr_result['firstname']?>">
                </td>
            </tr>
            <tr>
                <td>
                    นามสกุล
                </td>
                <td>
                    <input type="text" name="lastname" id="" value="<?php echo $arr_result['lastname']?>">
                </td>
            </tr>
        </table>
        <input type="submit" value="แก้ไขข้อมูล">
        <input type="text" name="id" value="<?php echo $id;?>" id="" hidden>
    </form>
</body>
</html>