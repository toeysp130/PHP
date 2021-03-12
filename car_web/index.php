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
                    <select name=  "car">
                        <option value="Accord">Accord</option>
                        <option value="Civic">Civic</option>
                        <option value="Jazz">Jazz</option>
                        <option value="City">City</option>
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
                    Accord
                </td>
                <td>
                    1,799,000
                </td>
                <td>
                    2.00
                </td>
            </tr>
            <tr align="center">
                <td>
                    <img src="Pic/Civic.png" alt="" width="50%">
                </td>
                <td>
                    Civic
                </td>
                <td>
                    1,145,000
                </td>
                <td>
                    2.00
                </td>
            </tr>
            <tr align="center">
                <td>
                    <img src="Pic/Jazz.png" alt="" width="50%">
                </td>
                <td>
                    Jazz
                </td>
                <td>
                    754,000
                </td>
                <td>
                    4.00
                </td>
            </tr>
            <tr align="center">
                <td>
                    <img src="Pic/City.png" alt="" width="50%">
                </td>
                <td>
                    city
                </td>
                <td>
                    749,000
                </td>
                <td>
                    4.00
                </td>
            </tr>
        
            </table>
        </fieldset>
    </form>
</body>
</html>