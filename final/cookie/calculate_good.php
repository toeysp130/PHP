<?php 
    include 'condb.php';
    $sql = "SELECT * FROM `goods` ";
    $result = mysqli_query($conn,$sql);
    for($i = 0 ; $i < mysqli_num_rows($result) ; $i++){
        $goods[] = mysqli_fetch_array($result);
    }
    
    

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
    <table border="1">
        <tr>
            <td colspan="7" align="center">
                Calculate Goods
            </td>
        </tr>
        <tr >
            <th id="SH">
                #
            </th>
            <th id="id">
                Goods id
            </th>
            <th id="name">
                Goods name
            </th>
            <th id="pr">
                Goods price
            </th>
            <th id="gq">
                Goods quantity
            </th>
            <th>
                Cumalative total
            </th>
        </tr>
        <?php $x = 0; $cumulativeTotal = 0;
            while($x<count($goods)){
        ?>
        <tr>
            <td align="center" id="SH">
                <?php echo $x+1; ?>
            </td>
            <td align="center" id="id">
                <?php echo $goods[$x][0]; ?>
            </td>
            <td id="name">
                <?php echo $goods[$x][1]; ?>
            </td>
            <td align="right" id="pr">
                <?php echo number_format($goods[$x][2],2); ?>
            </td>
            <td align="right" id="gq">
                <?php echo $goods[$x][3]; ?>
            </td>
                <?php $cumulativeTotal += $goods[$x][3]; ?>
            <td>
                <?php echo number_format($cumulativeTotal,0) ?>
            </td>
                <?php $x++; ?>
        </tr>
        <?php }?>


        

    </table>
</body>
</html>
