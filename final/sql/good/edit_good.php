<?php 
    include 'condb.php';
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM goods WHERE goosid = '$id' ";
    $result = mysqli_query($conn,$sql);
    $rs = mysqli_fetch_array($result);
    
?>
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
    <form action="process_update.php" method="get">
    <table border = "1" width = "30%">
       <tr>
           <td colspan = "2" align = "center">
                <b>Edit goods</b>
           </td>
       </tr>
       <tr>
           <td>
                Good id
           </td>
           <td>
                <input type="text" name="id" id="" value = "<?php echo $rs[0]?>">
           </td>
       </tr>
       <tr>
           <td>
                Good name
           </td>
           <td>
                <input type="text" name="name" id="" value = "<?php echo $rs[1]?>">
           </td>
       </tr>
       <tr>
           <td>
                Good price(bath)
           </td>
           <td>
                <input type="text" name="pr" id="" value = "<?php echo $rs[2]?>">
           </td>
       </tr>
       <tr>
           <td>
                Good quantity
           </td>
           <td>
                <input type="text" name="gq" id="" value = "<?php echo $rs[3]?>">
           </td>
       </tr>
    </table>
    <br>
    <input type="submit"  value="Edit">
    <input type="reset"  value="Clear">
</form>
</center>
</body>
</html>
