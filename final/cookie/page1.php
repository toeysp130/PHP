<?php
    
    @$employeeUsername = $_COOKIE['employeeUsername'];
    @$employeePassword = $_COOKIE['employeePassword'];
    @$employeePermision = $_COOKIE['employeePermision'];
    if($employeePermision == 1){
        echo "This is page1.php";
    }else{
        echo $employeeUsername." No permision to view page1.php";
    }
?>