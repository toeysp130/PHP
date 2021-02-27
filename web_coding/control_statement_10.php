<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $start = -2;
        $end = 3;
        for($num = $start;$num <= $end ; $num++){
            if($num == 0){
                echo "***ข้ามการหารด้วยศูนย์ เพื่อไม่ให้เกิดความผิดพลาด ***<br>";
                continue;
            }
            echo "100 / $num = ".(100/$num)."<br/>";
        }
    ?>
</body>
</html>