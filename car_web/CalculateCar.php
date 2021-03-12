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
    <?php if($_GET['car'] == "Accord"){ ?>
    <form action="" method="get">
    <table border="0" align="center">
        <tr>
            <td align="center">
                <img src="Pic/logo-accord.png" alt="" width="50%">
                <br>
                <img src="Pic/Accord.png" alt="" width = "80%">
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
                <center><input type="submit" value="Calculate"></center>
            </td>
        
        </tr>
    </table>
    <?php }else if($_GET['car'] == "Civic"){ ?>
    <form action="" method="get">
    <table border="0" align="center">
        <tr>
            <td align="center">
                <img src="Pic/logo-civic.png" alt="" width="50%">
                <br>
                <img src="Pic/Civic.png" alt="" width = "80%">
            </td>
            <td>
                <fieldset >
                    <legend>เลือกเงินดาวน์</legend>
                    เงินดาวน์
                    <input type="radio" name="radi_down" id="down_percen">
                    <label for="down_percen"><select name="down_price" id="">
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                        <option value="30">30%</option>
                    </select></label>
                    หรือ
                    <label for="down_number">ระบุจำนวนเงิน
                    <input type="radio" name="radi_down" id="down_number">
                    <input type="number" name="down_price" >
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
                <center><input type="submit" value="Calculate"></center>
            </td>
        
        </tr>
    </table>
    <?php }else if($_GET['car'] == "Jazz"){ ?>
    <form action="" method="get">
    <table border="0" align="center">
        <tr>
            <td align="center">
                <img src="Pic/logo-jazz.png" alt="" width="50%">
                <br>
                <img src="Pic/Jazz.png" alt="" width = "80%">
            </td>
            <td>
                <fieldset >
                    <legend>เลือกเงินดาวน์</legend>
                    เงินดาวน์
                    <input type="radio" name="radi_down" id="down_percen">
                    <label for="down_percen"><select name="down_price" id="">
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                        <option value="30">30%</option>
                    </select></label>
                    หรือ
                    <label for="down_number">ระบุจำนวนเงิน
                    <input type="radio" name="radi_down" id="down_number">
                    <input type="number" name="down_price" >
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
                <center><input type="submit" value="Calculate"></center>
            </td>
        
        </tr>
    </table>
    <?php }else if($_GET['car'] == "City"){ ?>
    <form action="" method="get">
    <table border="0" align="center">
        <tr>
            <td align="center">
                <img src="Pic/logo-city.png" alt="" width="50%">
                <br>
                <img src="Pic/City.png" alt="" width = "80%">
            </td>
            <td>
                <fieldset >
                    <legend>เลือกเงินดาวน์</legend>
                    เงินดาวน์
                    <input type="radio" name="radi_down" id="down_percen">
                    <label for="down_percen"><select name="down_price" id="">
                        <option value="15">15%</option>
                        <option value="20">20%</option>
                        <option value="25">25%</option>
                        <option value="30">30%</option>
                    </select></label>
                    หรือ
                    <label for="down_number">ระบุจำนวนเงิน
                    <input type="radio" name="radi_down" id="down_number">
                    <input type="number" name="down_price" >
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
                <center><input type="submit" value="Calculate"></center>
            </td>
        
        </tr>
    </table>
    <?php }?>
    
</body>
</html>