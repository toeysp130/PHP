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
        <form action="CarSell.php" method="GET">
        <tr>
            <td>
                ชื่อ นามสกุล ลูกค้า : 
            </td>
            <td>
                <input type="text" name="name_custo">
            </td>
        </tr>
        <tr>
            <td>
                จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด : 
            </td>
            <td>
                <input type="number" name="pay_customer">
            </td>
        </tr>
        <tr>
            <td>
                จำนวนเงิน ที่ต้องการ : 
            </td>
            <td>
                <select name="pay_all" >
                    <option value="">--เลือกจำนวนงวดชำระ</option>
                    <option value="36">36</option>
                    <option value="48">48</option>
                    <option value="60">60</option>
                    <option value="72">72</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="ซื้อรถ">
            </td>
        </tr>
        </form>
    </table>
</body>
</html>