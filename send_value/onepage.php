<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <form >
            <table>
                <tr>
                    <td>
                        <b>รหัสนักศึกษา</b>
                        <input type="text" name="ID_stu" id="ID_stu">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>ชื่อ </b>
                        <input type="text" name="fname" id="">
                    </td>
                    <td>
                        <b>นามสกุล </b>
                        <input type="text" name="lname" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>เพศ</b>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">ชาย</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">หญิง</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>หลักสูตรการศึกษา</b>
                        <input type="radio" name="saka" id="IT" value="IT"> 
                        <label for="IT">IT</label>
                        <input type="radio" name="saka" id="ITI" value="ITI">
                        <label for="ITI">ITI</label>
                        <input type="radio" name="saka" id="INE" value="INE">
                        <label for="INE">INE</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>เกรดเฉลี่ย</b>
                        <input type="text" name="grade" id="">
                    </td>
                </tr>
            </table>
            <button type="submit" onclick="showInput();" >ส่งข้อมูล</button>
        </form>

        <p>รหัสนักศึกษา <span id="display"></span> </p>
        
        <script src="" async defer></script>
        <script language="JavaScript">
            function showInput() {
                document.getElementById('display').innerHTML = 
                            document.getElementById("ID_stu").value;
            }
        </script>
    </body>
</html>