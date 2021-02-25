<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<?php 
    $row = $_GET['row'];
    $col = $_GET['col'];
    $rand = random($row,$col);
    $odd = 0;
    $unodd = 0;
    result($rand,$row,$col,$odd,$unodd);
    function random($r,$c){
        for($i = 0 ;$i < $r ;$i++){
            for($j = 0 ;$j < $c ; $j++){
            $rand[$i][$j] = rand(1,99);
            }
        }
        return $rand;
    }
    
    
    
    function result($rand,$row,$col,$odd,$unodd){
        echo "<table border='3'>";
        echo "<tr><td colspan='$col' align='center'>countRandomOddEvnCal</td></tr>";
        echo "<tr>";
        for($i = 0 ; $i< $row ; $i++){
            for($j = 0 ; $j < $col ; $j++){
                if($rand[$i][$j] % 2 == 0){
                    echo "<td align='center' style='color:green' width = 70>";
                    echo $rand[$i][$j];
                    $odd+=1;
                }
                else{
                    echo "<td align='center' style='color:red' width = 70 >";
                    echo $rand[$i][$j];
                    $unodd+=1;
                }
               
            }
            echo "</td></tr>";
        }
        echo "</table>";
        echo "<h3>เลขคู่ = ".$odd."</h3>";
        echo "<h3>เลขคี่ = ".$unodd."</h3>";
        echo "<button><a href = 'random_odd.html'>back</a></button>";
    }
?>      
    
</center>
</body>
</html>