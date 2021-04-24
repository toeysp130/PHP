<?php 
    include_once('function.php');
    $updateuser = new DB_con();
    if(isset($_POST['update'])){
        $userid = $_GET['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];

        $sql = $updateuser->update($fname,$lname,$email,$phonenumber,$address,$userid);
        if($sql){
            echo "<script>alert('Updated Successfuly!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
        else{
            echo "<script>alert('Updated is not complete!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <a href="index.php" class="btn btn primary mt-3">Go Back</a>
    <hr>
    <h1 class="mt-5">Insert Page</h1>
    <hr>
    <?php 
        $userid = $_GET['id'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonerecord($userid);
        while($row = mysqli_fetch_array($sql)){
    ?>
    <form action="" method="post">
        <div class="mb-4">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" id="" require value="<?php echo $row['firstname'];?>">
        </div>
        <div class="mb-4">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" id="" require value="<?php echo $row['lastname'];?>">
        </div>
        <div class="mb-4">
            <label for="email"> Email</label>
            <input type="email" class="form-control" name="email" id="" require value="<?php echo $row['email'];?>">
        </div>
        <div class="mb-4">
            <label for="phonenumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" name="phonenumber" id="" require value="<?php echo $row['phonenumber'];?>">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" name="address" id="" require cols="30" rows="10"><?php echo $row['address'];?></textarea>
        </div>
        <?php }?>
        <button type="submit" class="btn btn-success" name="update">Update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>