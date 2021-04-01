<?php

use function PHPSTORM_META\type;

$car = $_GET['car'] ; $car_up = strtoupper($car); $arr_detail[][] = $_GET['arr'];
    echo gettype($arr_detail);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function makeSelection(radioid){
            document.getElementById(radioid).checked = true
        }
    </script>
</head>
<body>
    <form action="#" method="GET">
    <?php echo "<input type='text' name='car' hidden value='$car'>" ;?>
    <table border="0" align="center">
        <tr>
            <td align="center">
                <?php echo "<img src='Pic/logo-$car.png' width='50%''>";?>
                <br>
                <?php echo "<img src='Pic/$car_up.png' width = '80%'> ";?>
            </td>
            <td>
                <fieldset >
                    <legend>เลือกเงินดาวน์</legend>
                    เงินดาวน์
                    <input type="radio" name="radi_down" id="down_percen" >
                    <label for="down_percen">
                    <select name="down_price" id="" onchange="makeSelection('down_percen')">
                        <option value="" selected disabled hidden>---</option>
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                        <option value="30">30%</option>
                    </select></label>
                    หรือ
                    <label for="down_number">ระบุจำนวนเงิน
                    <input type="radio" name="radi_down" id="down_number" >
                    <input type="number" name="down_price" onchange="makeSelection('down_number')" >
                    </label>
                </fieldset>
                <fieldset>
                    <legend>เลือกระยะเวลาการผ่อนชำระ</legend>
                    ระยะเวลา
                    <select name="per_month" id="">
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="60">60</option>
                        <option value="72">72</option>
                    </select>
                    งวด         
                </fieldset>
                <br>
                <br>
                <center><input type="submit" value="Calculate" name="submit"></center>
            </td>
        
        </tr>
    </table>
    </form>
    <?php 
    if(isset($_GET['submit'])){
    ?>

    <table style="margin-left: 5rem;">
        <tr>
        <td>
        </td>
        <td>
            <table border="1">
                <tr>
                <td colspan="2">
                รายงานการคำนวณสินเชื่อผ่อนชำระ
                </td>
                </tr>
                <tr>
                <td>
                รุ่นรถยนต์ :
                </td>
                <td>
                <?php echo $car?>
                </td>
                </tr>
                <tr>
                <td>
                ราคารถยนต์ :
                </td>
                <td>
                <?php echo $car_price; ?>
                </td>
                </tr>
                <tr>
                <td>
                (1) เงินดาวน์ : 
                </td>
                </tr>
                <tr>
                <td>
                (2) จำนวนเงินที่ขอสินเชื่อ : 
                
                </td>
                </tr>
                <tr>
                <td>
                (3) ดอกเบี้ย ต่อปี : 
                
                </td>
                </tr>
                <tr>
                <td>
                (4) ดอกเบี้ย ทั้งหมด 3ปี(36งวด) : 
                
                </td>
                </tr>
                <tr>
                <td>
                (5) จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด : 
                
                </td>
                </tr>
            </table>
        </td>
        </tr>
        
    </table>

    <?php }?>

</body>
</html>


<?php 
    function DownPayment($car_price,$down_price_percen){
        return ($car_price * $down_price_percen);
    }
?>