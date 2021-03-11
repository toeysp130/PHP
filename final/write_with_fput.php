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
    $link[] = "http://www.google.co.th";
    $link[] = "http://www.yahoo.com"; 
    $link[] = "http://www.hotmail.com"; 
    $fp = fopen("link.html","w"); 
    for($i = 0; $i < count($link) ; $i++) {
        $data = "<a href = '$link[$i]'>".$link[$i]."</a><br>\n";
        fputs($fp, $data); 
    }
    echo "<h3>Write File Finish...</h><br>";
    echo "<a href='link.html'> test file </a>"; 
    fclose($fp);
?>
</body>
</html>