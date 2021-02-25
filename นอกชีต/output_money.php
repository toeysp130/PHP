<?php
    
    $money = $_POST['money'];
    $x = $money;
    $b1000 =  floor(($money / 1000));
    $money = $money - $b1000 * 1000;
    $b500  = floor($money / 500);
    $money = $money - $b500 * 500;
    $b100  = floor($money / 100);
    $money = $money - $b100 * 100;
    $b20 = floor($money / 20);
    $money = $money - $b20 * 20;
    $b10  = floor($money / 10);
    $money = $money - $b10 * 10;
    $b5  = floor($money / 5);
    $money = $money - $b5 * 5;
    echo "MONEY :$x";
    echo "<br>";
    if ($b1000 != 0) {
        echo "1000 Bath :$b1000";
        echo "<br>";
    }

    if ($b500 != 0) {
        echo "500 Bath :$b500";
        echo "<br>";
    }

    if ($b100 != 0) {
        echo "100 Bath  :$b100";
        echo "<br>";
    }
    if ($b20 != 0) {
        echo "20 Bath  :$b20";
        echo "<br>";
    }

    if ($b10 != 0) {
        echo "10 Bath  :$b10";
        echo "<br>";
    }

    if ($b5 != 0) {
        echo "5 Bath  :$b5";
        echo "<br>";
    }

    if ($money != 0){
        echo "1 Bath  :$money";
    }
    echo "<button><a href = 'input_money.php'>Back</a></button>";
    ?>