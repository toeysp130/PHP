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
        $month = array ( array (2555,230000,300400,200900,249000),
        array (2556,300000,380400,290000,149000),
        array (2557,330000,350000,400900,490000),
        array (2558,380000,395000,290000,349000),
        array (2559,335000,400400,300900,490000));
        $title = array("ปี","ไตรมาส1","ไตรมาส2","ไตรมาส3","ไตรมาส4");
        $MaxRow = count($month);
        $MaxCol = count($month[0]);

        echo "<table border = '1' align = 'center' width = '100'>";
        echo "<tr>";

        for($c = 0 ; $c < $MaxCol ; $c++){
            echo "<td width = '50' align = 'center' >".$title[$c]."</td>";
        }
        echo "</tr>";

        for($r = 0;$r < $MaxRow ; $r++){
            echo "<tr>";
            for($c = 0 ; $c < $MaxCol ; $c++){
                echo "<td width = '50' align ='center'>".$month[$r][$c]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>