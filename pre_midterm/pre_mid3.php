<?php 
    function checkNum(){
        $start = $_GET['start_num'];
        $end = $_GET['end_num'];
        $div_by = $_GET['div_num'];
        for($i = $start; $i <= $end ; $i++){
            if($i % $div_by == 0 ){
                echo $i.",";
            }
        }
    }
    function countNum(){
        $count_div_non = 0;
        $start = $_GET['start_num'];
        $end = $_GET['end_num'];
        $div_by = $_GET['div_num'];
        for($i = $start; $i <= $end ; $i++){
            if($i % $div_by == 0 ){
                $count_div_non += 1;
                
            }
        }
        echo $count_div_non;
    }
    function sumNum(){
        $count_sum = 0;
        $start = $_GET['start_num'];
        $end = $_GET['end_num'];
        $div_by = $_GET['div_num'];
        for($i = $start; $i <= $end ; $i++){
            if($i % $div_by == 0 ){
                $count_sum += $i;
            }
        }
        echo $count_sum;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table alignt="center">
        <form action="index.php" method="GET">
        <tr>
            <td>
                ค่าเริ่มต้น
            </td>
            <td>
                <input type="number" name="start_num">
            </td>
        </tr>
        <tr>
            <td>
                ค่าสุดท้าย
            </td>
            <td>
                <input type="number" name="end_num">
            </td>
        </tr>
        <tr>
            <td>
                ตัวเลขที่นำไปหาร
            </td>
            <td>
                <input type="number" name="div_num">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Check Num" name="submit">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php checkNum(); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                จำนวนที่หารลงตัว = <?php countNum(); ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                ผลรวมของตัวเลขที่หารลงตัว = <?php sumNum(); ?>
            </td>
        </tr>
        </form>
    </table>
</body>
</html>