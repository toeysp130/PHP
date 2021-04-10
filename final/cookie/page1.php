<?php
    session_start();
    @$employeeUsername = $_SESSION['employeeUsername'];
    @$employeePassword = $_SESSION['employeePassword'];
    @$employeePermision = $_SESSION['employeePermision'];
    if($employeePermision == 1){
        echo "This is page1.php";
    }else
        echo $employeeUsername." No permision to view page1.php";

?>