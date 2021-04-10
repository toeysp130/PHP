<?php 
    include 'condb.php';
    $employeeUsername = $_POST['username'];
    $employeePassword = $_POST['password'];
    $sql = "SELECT * FROM employee WHERE employeeUsername = '$employeeUsername' AND employeePassword = '$employeePassword'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        $employee = mysqli_fetch_array($result);
        session_start();
        $_SESSION['employeeUsername'] = $employee[2];
        $_SESSION['employeePassword'] = $employee[3];
        $_SESSION['employeePermision'] = $employee[4];
        mysqli_close($conn);
        header("location:menu.php");
    }
    else{
        echo "Wrong username or password";
    }

?>