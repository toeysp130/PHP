<?php 
    setcookie("employeeUsername","",time()-3600);
    setcookie("employeePassword","",time()-3600);
    setcookie("employeePermision","",time()-3600);
    header("location:login.php");
?>