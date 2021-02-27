<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ตัวอย่าง control statement ที่ 4</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php 
            $a = 76;
            $b = 16;
            $c = 56;
            $min = 0;
            if($a  < $b){
                if($a < $c)$min = $a;
                else $min = $c;

            }else{
                if($b < $c)$min = $b;
                else $min = $c;
            }
            echo "Three Number : <b>$a,$b,$c</b><br/>";
            echo "Min value : <b>$min </b><br/>";

        ?>
        <script src="" async defer></script>
    </body>
</html>