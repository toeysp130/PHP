<?php 
    $array_detail = array(array("Accord",1799000 ,2.00),
                          array("Civic",1145000,2.00),
                          array("Jazz",754000,4.00),
                          array("City",749000,4.00));

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
    <center><img src="Pic/header (1).jpg" alt="" width="72%" height="330px"></center>
    <form action="CalculateCar.php" method="get">
    <fieldset style="width: 70%; margin: 0 auto; ">
    <legend style="margin: 0 auto;">Car Model</legend>
        <table align="center">
            <tr >
                <td> 
                    เลือกรุ่นรถยนต์ 
                    <select name="car">
                        <option value="accord">Accord</option>
                        <option value="civic">Civic</option>
                        <option value="jazz">Jazz</option>
                        <option value="city">City</option>
                    </select>
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>

        <table align="center" border="1" width = "70%">
        
            <tr align="center">
                <td width = "40%">
                    ภาพรถยนต์
                </td>
                <td>
                    รุ่นรถยนต์
                </td>
                <td>
                    ราคารถยนต์ (บาท)
                </td>
                <td>
                    อัตราดอกเบี้ย ต่อปี(ร้อยละ ,%)
                </td>
            </tr>
            <tr align="center">
                <td>
                    <img src="Pic/Accord.png" alt="" width="50%">
                </td>
                <td>
                    <?php echo $array_detail[0][0]; ?>
                </td>
                <td>
                    <?php echo number_format($array_detail[0][1],);?>
                </td>
                <td>
                    <?php echo number_format((float)$array_detail[0][2],2);?>
                    
                </td>
            </tr>
            <tr align="center">
                <td>
                    <img src="Pic/Civic.png" alt="" width="70%">
                </td>
                <td>
                    <?php echo $array_detail[1][0]; ?>
                </td>
                <td>
                    <?php echo number_format($array_detail[1][1],);?>
                </td>
                <td>
                    <?php echo number_format((float)$array_detail[1][2],2);?>
                    
                </td>
            </tr>
            <tr align="center">
                <td>
                    <img src="Pic/Jazz.png" alt="" width="60%">
                </td>
                <td>
                    <?php echo $array_detail[2][0]; ?>
                </td>
                <td>
                    <?php echo number_format($array_detail[2][1],);?>
                </td>
                <td>
                    <?php echo number_format((float)$array_detail[2][2],2);?>
                    
                </td>
            </tr>
            <tr align="center">
                <td>
                    <img src="Pic/City.png" alt="" width="70%"> 
                </td>
                <td>
                    <?php echo $array_detail[3][0]; ?>
                </td>
                <td>
                    <?php echo number_format($array_detail[3][1],);?>
                </td>
                <td>
                    <?php echo number_format((float)$array_detail[3][2],2);?>
                    
                </td>
            </tr>
        
            </table>
        </fieldset>

        <input type="text" name="arr" value="$array_detail[][]" hidden >
    </form>
</body>
</html>
