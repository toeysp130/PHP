<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างที่ 10-1</title>
</head>
<body>
    <?php 
        $fp = @fopen("sample.txt","r");
        if($fp){
            while(!feof($fp)){
                $data = @fgets($fp);
                echo $data."<br>";
            }
            fclose($fp);
        }
        else {
            die ("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ </body></html>") ;
        }
    ?>
</body>
</html>