<?php
    include_once('function.php');

    $insertdata = new DB_con();
    
    if(isset($_POST['insert'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $insertdata->insert($fname, $lname, $email, $phonenumber, $address);
        
        if($sql){
            echo "<script>alert('Record Insert Successfully!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        else{
            echo "<script>alert('Something went wrong! Please try agian!');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">Go Back</a>
        <hr>
        <h1 class="mt-5">Insert Page</h1>
        <hr>
        <form action ="" method="post">
            <div class = "mb-4">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class = "form-control" name = "firstname" required>
            </div>
            <div class="mb-4">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-4">
                <label for="email" >Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-4">
                <label for="phonenumber" >Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" required>
            </div>
            <div class="mb-3">
                <label for="address" >Address</label>
                <textarea name="address"cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" name ="insert" class="btn btn-success">Insert</button>
        </form>
    </div>
</body>
</html>