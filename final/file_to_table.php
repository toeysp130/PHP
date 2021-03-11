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
        $fp = @fopen("sample.txt","r");
        $first = true;
        if ($fp){
            echo "<table border='1' align='center' width='50%'>"; while (!feof($fp)){
            $data =@fgetc($fp ); 
            if ($first){
                echo "<tr><td align='center'>" . $data;
                $first =false; 
            }
            else {
                if ($data == ",") 
                    echo "</td><td align='center'>"; 
                else if ($data == "\n") {
                    echo "</td></tr>";
                    $first =true; 
                }
                else 
                    echo  $data;
                    }
                }
                echo "</table>"; 
            }
        else {
            die ("ไม่สามารถเปิดไฟล์ Sample.txt");
            }
    ?>
</body>
</html>