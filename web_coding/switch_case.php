<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day of Week</title>
</head>
<body>
    <?php
        $day = 'wednesday';
        $color;
        switch($day){
            case 'sunday' : $color = 'red'; break;
            case 'monday' : $color = 'yellow'; break;
            case 'tuesday' : $color = 'pink'; break;
            case 'wednesday' : $color = 'green'; break;
            case 'thursday' : $color = 'orange'; break;
            case 'friday' : $color = 'blue'; break;
            case 'saturday' : $color = 'purple'; 
        }
            echo "Day is $day <br/>";
            echo "This day color $color<br/>";
    ?>
</body>
</html>