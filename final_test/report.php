<?php 
    include'connect.php';
    $sql_category = "SELECT product_list.productid , product_type.name_type , product_list.productName,product_list.quantity,product_list.costPrice,product_list.SellPrice 
    FROM `product_list` 
    INNER JOIN product_type on product_list.typeid = product_type.id_type ";

    //SELECT product_list.productid , product_list.productName,
    //product_list.quantity,product_list.costPrice,product_list.SellPrice 
    //FROM `product_list` 
    //INNER JOIN product_type on product_list.typeid = product_type.id_type 
    $sql_type = "SELECT * FROM `product_type`";
    $result_type = mysqli_query($conn,$sql_type);
    $count_i = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>รายงานสรุปผลสินค้า</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mx-5">
        <div class="col-12">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#search_cate">ค้นหา</button>     
        </div>
            <?php 
            if(!isset($_POST['type_product'])){
                $count_i = 0;
                while($result_name_count = mysqli_fetch_assoc($result_type)){
                    $arr_name_cate[$count_i++] = $result_name_count['name_type'];
                    ?>
                    <table class="table col-5 table-bordered mx-5">
                        <thead class="thead ">
                            <tr class="table-primary">
                                <th colspan="6">
                                    <?php echo $result_name_count['name_type'];
                                        $name_search = $result_name_count['name_type'];
                                    ?>
                                </th>
                            </tr>
                            <tr class="table-dark">
                                <th>#</th>
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>จำนวนคงเหลือ</th>
                                <th>ราคาทุน</th>
                                <th>ราคาขาย</th>
                            </tr>
                        </thead>
                        <?php 
                            $count = 1;
                            $sql_of_cate = " SELECT product_list.productid , product_list.productName,
                            product_list.quantity,product_list.costPrice,product_list.SellPrice 
                            FROM `product_list` 
                            INNER JOIN product_type on product_list.typeid = product_type.id_type 
                            WHERE product_type.name_type = '$name_search'";
                            $result_of_cate = mysqli_query($conn,$sql_of_cate);
                            while($result_of_cate_ft = mysqli_fetch_array($result_of_cate)){
                        ?>
                        <tbody>
                            <tr>
                                <th>
                                    <?php echo $count ?>
                                </th>
                                <td>
                                    <?php echo $result_of_cate_ft['productid'] ?>
                                </td>
                                <td>
                                    <?php echo $result_of_cate_ft['productName'] ?>
                                </td>
                                <td>
                                    <?php echo $result_of_cate_ft['quantity'] ?>
                                </td>
                                <td>
                                    <?php echo $result_of_cate_ft['costPrice'] ?>
                                </td>
                                <td>
                                    <?php echo $result_of_cate_ft['SellPrice'] ?>
                                </td>
                            </tr>
                            <?php $count++;}?>
                        </tbody>
                            <tr>
                                <td colspan="6" class="table-info">
                                    <?php 
                                        echo "ประเภท".$result_name_count['name_type']."\t\tรวมทั้งหมด\t".$count-=1;
                                        $name_search = $result_name_count['name_type'];
                                    ?>
                                </td>
                            </tr>
                    </table>
                <?php } 
            }else { ?>
                <table class="table col-11 table-bordered mx-5">
                    <thead class="thead ">
                        <tr class="table-primary">
                            <th colspan="6">
                                <?php //echo $result_name_count['name_type_modal'];
                                echo $_POST['type_product'];
                                $name_search_modal = $_POST['type_product'];
                                ?>
                            </th>
                        </tr>
                        <tr class="table-dark">
                            <th>#</th>
                            <th>รหัสสินค้า</th>
                            <th>ชื่อสินค้า</th>
                            <th>จำนวนคงเหลือ</th>
                            <th>ราคาทุน</th>
                            <th>ราคาขาย</th>
                        </tr>
                    </thead>
                    <?php 
                        $count = 0;
                        $sql_of_cate = "SELECT product_list.productid , product_list.productName,
                        product_list.quantity,product_list.costPrice,product_list.SellPrice 
                        FROM `product_list` 
                        INNER JOIN product_type on product_list.typeid = product_type.id_type 
                        WHERE product_type.name_type = '$name_search_modal'";
                        $result_of_cate = mysqli_query($conn,$sql_of_cate);
                        while($result_of_cate_ft = mysqli_fetch_array($result_of_cate)){
                            if($count < 0){ $count++;?>
                                <tbody>
                                    <tr>
                                        <th>
                                            <?php echo $count ?>
                                        </th>
                                        <td>
                                            <?php echo $result_of_cate_ft['productid'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result_of_cate_ft['productName'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result_of_cate_ft['quantity'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result_of_cate_ft['costPrice'] ?>
                                        </td>
                                        <td>
                                            <?php echo $result_of_cate_ft['SellPrice'] ?>
                                        </td>
                                    </tr>
                                <?php 
                            } else if($count == 0){ ?>
                                <tbody>
                                <tr>
                                    <td colspan="6"> ไม่มีข้อมูลสินค้าประเภท <?php echo $name_search_modal?></td>
                                </tr>
                            <?php }?>
                    </tbody>
                        <tr>
                            <td colspan="6" class="table-info">
                                <?php 
                                    echo "ประเภท".$result_of_cate_ft['name_type']."\t\tรวมทั้งหมด\t".$count-=1;
                                    $name_search = $result_of_cate_ft['name_type'];
                                ?>
                            </td>
                        </tr>
                </table>
            <?php  }?>
        </div>
    </div>
    <!-- popup เด้งค้นหาประเภท -->

    <div class="modal fade" id="search_cate" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">เลือกประเภท</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="post" >
            <div class="modal-body">
                <div class="form-group">
                    <label for="name_cate">ชื่อประเภทสินค้า</label>
                    <select name="type_product" class="form-control" id="name_cate"><?php 
                    $sql_type_modal = "SELECT * FROM `product_type`";
                    $result_type = mysqli_query($conn,$sql_type_modal);
                    while($result_type_ft = mysqli_fetch_assoc($result_type)){?>
                        <option value="<?php echo $result_type_ft['name_type']?>"><?php echo $result_type_ft['name_type']?></option><?php }?>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="success" class="btn btn-success">ค้นหา</button>
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