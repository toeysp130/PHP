<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $products = array(
        "T0001" => array("name" => "บล็อกหยอดหมีพูห์", "price" => 599),
        "T0002" => array("name" => "ตุ๊กตากบสอน ABC", "price" => 2400),
        "T0003" => array("name" => "โต๊ะกิจกรรม", "price" => 1690),
        "P0001" => array("name" => "กระดานลื่นสุขสัยต์", "price" => 9800),
        "B0001" => array("name" => "หนังสือมีเสียง : Pooh's Musical", "price" => 550)
    );
    echo "<table align='center' width='100%' border='1'>";
    echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคา</th></tr>";
    foreach($products as $key1 => $value1){
        echo "<tr><td align='center'> $key1 </td>";
        foreach($value1 as $key2 => $value2){
            if($key2 == "name"){
                echo "<td> $value2 </td>";
            }
            else {
                echo "<td align = 'rignt'>";
                echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคา</th></tr>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
        ?>
</body>
</html>