<?php $sum_multi = $_GET['pay_customer'] * $_GET['pay_all'];
    function carCheck($sum_multi){
        if($sum_multi > 749000){
            if($sum_multi >= 1799000 ){
                ?>
                <tr>
                    <td>
                        <img src='img/Accord.png' width='300px'><img src='img/logo-accord.png' width="200px">
                    </td>
                    <td>
                        ราคา 1,799,000 บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='img/Civic.png' width='300px'><img src='img/logo-civic.png' width="200px">
                    </td>
                    <td>
                        ราคา 1,149,000 บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='img/Jazz.png' width='300px'><img src='img/logo-jazz.png' width="200px">
                    </td>
                    <td>
                        ราคา 849,000 บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='img/City.png'width='300px'><img src='img/logo-city.png' width="200px">
                    </td>
                    <td>
                        ราคา 749,000 บาท
                    </td>
                </tr>

                <?php
            }else if($sum_multi >= 1149000){
                ?>
                <tr>
                    <td>
                        <img src='img/Civic.png' width='300px'><img src='img/logo-civic.png' width="200px">
                    </td>
                    <td>
                        ราคา 1,149,000 บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='img/Jazz.png' width='300px'><img src='img/logo-jazz.png' width="200px">
                    </td>
                    <td>
                        ราคา 849,000 บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='img/City.png' width='300px'><img src='img/logo-city.png' width="200px">
                    </td>
                    <td>
                        ราคา 749,000 บาท
                    </td>
                </tr>

                <?php
            }else if($sum_multi >= 849000){
                ?>
                <tr>
                    <td>
                        <img src='img/Jazz.png' width='300px'><img src='img/logo-jazz.png' width="200px">
                    </td>
                    <td>
                        ราคา 849,000 บาท
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src='img/City.png' width='300px><img src='img/logo-city.png' width="200px">
                    </td>
                    <td>
                        ราคา 749,000 บาท
                    </td>
                </tr>

                <?php
            }else if($sum_multi >= 749000){
                echo "city";
            }
        }
    }
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
                ชื่อ นามสกุล ลูกค้า : 
            </td>
            <td>
                <?php echo $_GET['name_custo'] ?>
            </td>
        </tr>
        <tr>
            <td>
                ผ่อนงวดละ : 
            </td>
            <td>
                <?php echo $_GET['pay_customer'] ?>
            </td>
        </tr>
        <tr>
            <td>
                จำนวนงวด : 
            </td>
            <td>
                <?php echo $_GET['pay_all'] ?>
            </td>
        </tr>
        <tr>
            <td>
                ยอดรวมเงิน :
            </td>
            <td>
                <?php echo $sum_multi ?>
            </td>
        </tr>
        <?php if(799000 <= $sum_multi){ ?>
            <tr>
                <td colspan="2">
                    รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้
                    <?php carCheck($_GET['pay_customer'] * $_GET['pay_all']) ?>
                </td>
            </tr>
             
            <?php }else{ ?>
            <tr>
                <td colspan="2" align="center">
                    ยอดเงินของท่าน ไม่เพียงพอ ที่จะซื้อรถยนต์ได้
                </td>
            </tr>
        <?php }?>
        <tr>
            <td colspan="2" align="center">
                <?php ?>
                <button><a href="CarPay.php">Back to Home</a></button>
            </td>
        </tr>
    </table>
</body>
</html>