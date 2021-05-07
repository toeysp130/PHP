<?php 
    include'connect.php';
    $sql_search = "SELECT product_list.productid , product_type.name_type , product_list.productName,product_list.quantity,product_list.costPrice,product_list.SellPrice FROM `product_list` INNER JOIN product_type on product_list.typeid = product_type.id_type";
    $result = mysqli_query($conn,$sql_search);
    if(isset($_POST['new_product'])){
        $new_product = $_POST['new_product'];
        $type_product = $_POST['type_product'];
        $quantity = $_POST['quantity'];
        $costPrice = $_POST['costPrice'];
        $SellPrice = $_POST['SellPrice'];
        $sql_insert = "INSERT INTO `product_list`(`productid`, `typeid`, `productName`, `quantity`, `costPrice`, `SellPrice`) 
        VALUES (NULL,'$type_product','$new_product','$quantity','$costPrice','$SellPrice')";

        mysqli_query($conn,$sql_insert);
        header("Refresh:0");
    }
    $sql_type = "SELECT * FROM `product_type`";
    $result_type = mysqli_query($conn,$sql_type);
    ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>สินค้า</title>
</head>
<body>
<div class="container">
    <div class="table table-hover table-striped">
        <div class="row">
            <table class="col-12">
                <thead class="thead bg-success text-light">
                    <tr>
                        <th>#</th>
                        <th>รหัสสินค้า</th>
                        <th>ประเภทสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>จำนวน</th>
                        <th>ราคาทุน</th>
                        <th>ราคาขาย</th>
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
                            <?php echo $result_ft['productid']?>
                        </td>
                        <td>
                            <?php echo $result_ft['name_type']?>
                        </td>
                        <td>
                            <?php echo $result_ft['productName']?>
                        </td>
                        <td>
                            <?php echo $result_ft['quantity']?>
                        </td>
                        <td>
                            <?php echo $result_ft['costPrice']?> 
                        </td>
                        <td>
                            <?php echo $result_ft['SellPrice']?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><a href="product_edit.php?id=<?php echo $result_ft['productid']?>" class="text-light">แก้ไข</a></button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger"><a href="product_delete.php?id=<?php echo $result_ft['productid']?>" class="text-light">ลบ</a></button>
                        </td>
                    </tr>
                <?php  $count++; }?>
                </tbody>
            </table> 
        </div>
    </div>
    <div class="row">
        <div class="col-3 mt-4">
            <a  href="menu.php" class="btn btn-outline-secondary">กลับหน้าเมนู</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product">เพิ่มสินค้า</button>
        </div>
    </div>    
</div>

<!-- popup เด้งรับสินค้าใหม่ -->

<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">เพิ่มสินค้า</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="pro_cate">เลือกประเภทสินค้า</label>
                        <select name="type_product" class="form-control" id="pro_cate"><?php while($result_type_ft = mysqli_fetch_assoc($result_type)){?>
                            <option value="<?php echo $result_type_ft['id_type']?>"><?php echo $result_type_ft['name_type']?></option><?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="new_product">ชื่อสินค้า</label>
                        <input type="text" class="form-control" name="new_product" id="new_product" placeholder="ชื่อสินค้า" >
                    </div>
                    <div class="form-group">
                        <label for="quantity">จำนวน</label>
                        <input type="number" class="form-control" name="quantity" id="quantity">
                    </div>
                    <div class="form-group">
                        <label for="">ราคาทุน</label>
                        <input type="number"  class="form-control"name="costPrice" id="costPrice">
                    </div>
                    <div class="form-group">
                        <label for="quantity">ราคาขาย</label>
                        <input type="number" class="form-control" name="SellPrice" id="SellPrice">
                    </div>
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
