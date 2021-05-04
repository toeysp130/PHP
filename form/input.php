<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_input.php" method="get">
        <table align="center">
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" id="">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="password" id="">
                </td>
            </tr>
            <tr>
                <td>
                    ชื่อ
                </td>
                <td>
                    <input type="text" name="firstname" id="">
                </td>
            </tr>
            <tr>
                <td>
                    นามสกุล
                </td>
                <td>
                    <input type="text" name="lastname" id="">
                </td>
            </tr>
        </table>
        <input type="submit" value="เพิ่มข้อมูล" >

    </form>
</body>
</html>