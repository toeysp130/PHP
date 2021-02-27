<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>คำนวณ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php 
            $hw = $_POST['hw'];
            $midterm = $_POST['midterm'];
            $final = $_POST['final'];
            if($hw > 30)$hw = 30;
            if($midterm > 35)$midterm = 35;
            if($final > 35)$final = 35;

            echo"<p>";
            echo"<b>ข้อมูลคะแนน</b><br/>";
            echo "Homework : <i> $hw </i> <br/>"; 
            echo "Midterm : <i> $midterm </i> <br/>"; 
            echo "Final : <i> $final </i> <br/>";
            $total = $hw + $midterm + $final;

            echo "Total Score : $total <br>";
            if ($total >= 80) echo "Result Grade : A<br>";
            elseif ($total >= 70) echo "Result Grade : B<br>"; 
            elseif ($total >= 60) echo "Result Grade : C<br>"; 
            elseif ($total >= 50) echo "Result Grade : D<br>"; 
            else echo "Result Grade : F<br>";
            echo "<br>";
            echo "<a href='grade_input.php'> <big>Back </big></a>";
        ?>
        <script src="" async defer></script>
    </body>
</html>