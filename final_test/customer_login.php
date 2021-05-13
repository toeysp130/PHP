<?php 
    include'connect.php';
    @$phone = $_POST['phone'];
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
            <form class="row g-3" method="post" action="customer_page.php">
                <div class="col-12 d-flex justify-content-center">
                    <label for="phone" class="visually-hidden mx-5">เบอร์โทรศัพท์</label>
                    <input type="text" class="form-control-sm" id="phone" name="phone">
                    <button type="submit" class="btn btn-primary mb-3 d-flex justify-content-center mx-4">เข้าสู่ระบบ</button>
                </div>
            </form>
            <div class="row d-flex justify-content-center">
                <button type="button" class="btn btn-secondary mx-2"><a href="menu.php" class="text-light"> หน้าหลัก</button></a>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newcustomer">ลงทะเบียนลูกค้าใหม่</button>
            </div>
        </div>
    </div>
</div>
<!-- popup เด้งรับประเภทสินค้าใหม่ -->
<div class="modal fade" id="newcustomer" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">ลงทะเบียนเพื่อเป็นลูกค้ารายใหม่</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="customer_add.php" method="post">
            <div class="modal-body">
                <label for="new_type">ชื่อ</label>
                <input type="text" name="firstname" id="new_type" class="form-control">
                <label for="new_type">นามสกุล</label>
                <input type="text" name="lastname" id="new_type" class="form-control">
                <label for="new_type">เบอร์โทร</label>
                <input type="text" name="phone" id="new_type" class="form-control">
                <label for="new_type">โปรโมชั่น</label>
                <input type="text" name="promotion" id="new_type" class="form-control">
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