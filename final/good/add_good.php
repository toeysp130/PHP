<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="process_insert.php" method="POST">
            <table border = "1">
                <tr>
                    <td colspan="2" align = "center"> 
                    Add goods
                    </td>
                </tr>
                <tr>
                    <td >
                    Goods id
                    </td>
                    <td>
                    <input type="text" name="id" id="">
                    </td>
                </tr>
                <tr>
                    <td >
                    Goods name
                    </td>
                    <td>
                    <input type="text" name="name" id="">
                    </td>
                </tr>
                <tr>
                    <td >
                    Goods price (baht)
                    </td>
                    <td>
                    <input type="text" name="price" id="">
                    </td>
                </tr>
                <tr>
                    <td >
                    Goods quantity
                    </td>
                    <td>
                    <input type="text" name="qu" id="">
                    </td>
                </tr>
            </table>
        <input type="submit" name="submit" id="" value ="Add">
        <input type="reset" name="reset" id="" value = "Clear">
    </form>
    </center>
    
</body>
</html>
