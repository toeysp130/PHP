<?php 
    include'connect.php';
    @$_SESSION['phone'] = $_POST['phone'];
    @$_SESSION['phone'] = $_REQUEST['phone'];

    $phone =$_SESSION['phone'];
    
    $sql_for_search_cus = "SELECT * FROM `customer_balance` WHERE `phone` = '$phone'";
    $result_search_cus = mysqli_fetch_assoc(mysqli_query($conn,$sql_for_search_cus));


    $sql_for_search_detail_cus = "SELECT * FROM `customer_detail` INNER JOIN customer_balance on customer_detail.phone = customer_balance.phone 
    WHERE customer_detail.phone ='$phone'";

    $result_for_search_detail_cus = mysqli_query($conn,$sql_for_search_detail_cus);
    
    $result_for_search_detail_cus_ft = mysqli_fetch_assoc($result_for_search_detail_cus);
    


    if($result_search_cus['status'] == "prepaid"){


    }else if($result_search_cus['status'] == "postpaid"){


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>ข้อมูลส่วนตัว</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="jumbotron mt-3 col-12 bg-info ">
            <div class="col-10 mx-2">
                <h1 class="display-2 text-light">สวัสดีคุณ <?php echo $result_for_search_detail_cus_ft['first_name']?></h1>
            </div>
            <div class="col-8 mt-3" >
            <h3 class="lead btn-light btn">เบอร์โทรของคุณ<?php echo $result_for_search_detail_cus_ft['phone']?></h3>

            </div>


        </div>
    </div>
    <div class="row">
        <div class="col-12 ml-0 jumbotron">
        <div class="col-6">
            <h3>โปรโมชั่นปัจจุบันของคุณคือ <button class="btn btn-outline-info"><?php echo $result_for_search_detail_cus_ft['promotion']?></button></h3>
        </div>

        <div class="mt-5">
            <a href="#" class="btn btn-info col-2 ">ร้านค้า</a>
            <button type="button" class="btn btn-success col-2" data-toggle="modal" data-target="#topup">เติมเงิน</button>
            <button type="button" class="btn btn-warning col-2" data-toggle="modal" data-target="#promotion">เปลี่ยนโปรโมชั่น</button>
            <a href="customer_login.php" class="btn btn-danger col-2">ออกจากระบบ</a>
        </div>
    </div>
</div>


<!-- popup เติมเงิน -->
<div class="modal fade" id="topup" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">เติมเงิน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="topup.php" method="post">
            <div class="modal-body">
            <?php $pull = mysqli_query($conn, "SELECT total FROM `customer_balance` WHERE `phone` = '$phone'");
            while($feth = mysqli_fetch_assoc($pull )){
            ?>
                <label for="new_type">จำนวนเงิน</label>
                <input type="text" name="topup" id="new_type" class="form-control" value="<?php echo $feth['total'];?>">
                <input type="text" name="phone" hidden value="<?php echo  $phone;?>">
            <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="success" class="btn btn-success">บันทึกข้อมูล</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <!--จบ popup-->

<!-- popup เปลี่ยนโปร -->
<div class="modal fade" id="promotion" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">โปรโมชั่น</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="customer_pro.php" method="post">
            <div class="modal-body">
            <?php $pull = mysqli_query($conn, "SELECT promotion FROM `customer_detail` WHERE `phone` = '$phone'");
            while($feth = mysqli_fetch_assoc($pull )){
            ?>
                <label for="new_type">โปรโมชั่นปัจจุบัน</label>
                <input type="text" name="promotion" id="new_type" class="form-control" value="<?php echo $feth['promotion'];?>">
                <input type="text" name="phone" hidden value="<?php echo $phone;?>">s
            <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="success" class="btn btn-success">บันทึกข้อมูล</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <!--จบ popup-->
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>