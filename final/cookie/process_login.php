<?php 
    include 'condb.php';
    $employeeUsername = $_POST['username'];
    $employeePassword = $_POST['password'];
    $sql = "SELECT * FROM employee WHERE employeeUsername = '$employeeUsername' AND employeePassword = '$employeePassword'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        $employee = mysqli_fetch_array($result);
        setcookie("employeeUsername",$employee[2],time()+3600);
        setcookie("employeePassword",$employee[3],time()+3600);
        setcookie("employeePermision",$employee[4],time()+3600);
        mysqli_close($conn);
        header("location:menu.php");
    }
    else{
        echo "Wrong username or password";
    }

?>