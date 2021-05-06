<?php 
    include'connect.php';
    $sql_search = "SELECT * FROM `product_type`";
    $result = mysqli_query($conn,$sql_search);
    if(isset($_POST['new_type'])){
        $new_type = $_POST['new_type'];
        $sql_insert = "INSERT INTO `product_type`(`id_type`, `name_type`) VALUES (NULL,'$new_type') ";
        mysqli_query($conn,$sql_insert);
        header("Refresh:0");
        
    }?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>ประเภทสินค้า</title>
</head>
<body>
<div class="container">
    <div class="table table-hover table-striped">
        <div class="row">
            <table class="col-12">
                <thead class="thead bg-success text-light">
                    <tr>
                        <th>#</th>
                        <th>รหัสประเภทสินค้า  </th>
                        <th>ชื่อประเภทสินค้า</th>
                        <th>แก้ไขข้อมูล</th>
                        <th>ลบข้อมูล</th>
                    </tr>
                </thead>
                <?php 
                    $count = 1;
                    while($result_ft = mysqli_fetch_assoc($result)){ 
                ?>
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $count ?>
                        </th>
                        <td>
                            <?php echo $result_ft['id_type']?>
                        </td>
                        <td >
                            <?php echo $result_ft['name_type']?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><a href="type_product_edit.php?id=<?php echo $result_ft['id_type']?>" class="text-light">แก้ไข</a></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" ><a href="type_product_delete.php?id=<?php echo $result_ft['id_type']?>" class="text-light">ลบ</a></button>
                        </td>
                    </tr>
                    <?php $count++;}?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-3 mt-4">
                <a  href="menu.php" class="btn btn-outline-secondary">กลับหน้าเมนู</a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newcategory">เพิ่มประเภทสินค้า</button>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->

    <!-- popup เด้งรับประเภทสินค้าใหม่ -->

    <div class="modal fade" id="newcategory" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">เพิ่มประเภทสินค้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
            <div class="modal-body">
                <label for="new_type">ชื่อประเภทสินค้า</label>
                <input type="text" name="new_type" id="new_type" class="form-control">
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