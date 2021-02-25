<?php
    $salary = $_POST['salary'];
    $salary_year = $salary*12;
    $vat_total;
    echo "เงินเดือน : ".number_format((float)$salary, 2)." บาท <br>";
    //number_format("1000000",2)

    echo "เงินรายปี : ".number_format((float)$salary_year, 2)." บาท <br>";

    if($salary_year >= 100000 && $salary_year <= 499999){
        $vat_total = 5;
    }
    else if($salary_year >= 500000 && $salary_year <= 999999){
        $vat_total = 10;
    }
    else if($salary_year >= 1000000 && $salary_year <= 1999999){
        $vat_total = 20;
    }
    else{
        $vat_total = 30;
    }

    echo "ภาษี : ".number_format((float)$vat_total, 2)."% <br>";
    
    $vat_cal = $salary_year*$vat_total/100;
    echo "เสียภาษี : ".number_format((float)$vat_cal, 2)." บาท<br>";

    $vat_after = $salary_year - $vat_cal;
    echo "เงินหลังหักภาษี : ".number_format((float)$vat_after, 2)." บาท <br>";

    echo "<br><button><a href='vat.php'>back</a></button>";
?>