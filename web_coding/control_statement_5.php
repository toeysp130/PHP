<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ตัวอย่าง control statement ที่ 5</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            $grade = 'A';
            $point = 0;
            switch($grade){
                case 'A' : $point = 4; break;
                case 'B+' : $point = 3.5; break;
                case 'B' : $point = 3; break;
                case 'C+' : $point = 2.5; break;
                case 'C' : $point = 2; break;
                case 'D+' : $point = 1.5; break;
                case 'D' : $point = 1; break;
                case 'F' : $point = 0; 
            }
            echo "Subject 060213206 Web Programming <br/>";
            echo "You got $grade and has $point point. <br/>";

        ?>
        <script src="" async defer></script>
    </body>
</html>