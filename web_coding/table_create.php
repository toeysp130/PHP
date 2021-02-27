<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>สร้างตาราง</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php 
            $row = $_POST['row']; 
            $column = $_POST['column']; 
            $rowMax = intval( $row); 
            $colMax = intval( $column);

            echo "<table align='center' border='4' width='300'>"; 
            for($r = 1; $r <= $rowMax ; $r++) {
                echo "<tr>";
                for($c = 1; $c <= $colMax ; $c++) {
                    if ($r == $c)
                        echo "<td align='center'><font color='#33ff66'> $r,$c </font></td>";
                    else 
                        echo "<td align='center'> $r,$c </td>"; 
                }
                echo "</tr>"; 
            }
            echo "</table>";


        ?>
        <a href="table_input.php">Back</a>
        <script src="" async defer></script>
    </body>
</html>