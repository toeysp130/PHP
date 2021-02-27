<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง control statement ที่ 9</title>
</head>
<body>
    <?php
        $found = false;
        for($num = 100 ; $num <= 200 ; $num++){
            if($num%13 == 0){
                $found  = true;
                break;
            }
            if($found)
                echo "เลขจำนวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัวคือ $num<br/>";
            else
                echo "ไม่มีเลขจำนวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัว<br/>";
        }
    ?>
    
</body>
</html>