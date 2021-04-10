<?php 
    session_start();
    $employeeUsername = $_SESSION['employeeUsername'];
    $employeePassword = $_SESSION['employeePassword'];
    $employeePermision = $_SESSION['employeePermision'];
?>
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
        <h1>Menu</h1>
        <h1><a href="page1.php">Page1</a></h1>
        <?php 
        if($employeePermision == 2){ 
            echo '<h1><a href="page2.php">Page2</a></h1>';
        }else{ 
            echo '<h1><a href="" onclick="return confirm (\''.$employeeUsername.'No permision to view page2.php\')">Page2</a></h1>';
        } ?>
        <h1><a href="logout.php">Logout</a></h1>
    </center>
</body>
</html>