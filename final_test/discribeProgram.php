<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
<center><h1>อธิบายการทำงานของโปรแกรมการขายสินค้าออนไลน์</h1></center>
<h3><p>1) 62-060216-1205-9   นายวัชรากรณ์  ชอบธรรม ตอนที่ 3 ลำดับที่ 4 </p></h3>
<h3>2)ชื่อโปรแกรม:โปรแกรมขายและให้บริการออนไลน์</h3>
<h3>3)ชื่อฐานข้อมูล:sellOnline</h3>
<h3>4)ฐานข้อมูล sellnline ของโปรแกรม ประกอบด้วยตาราง ดังนี้ </h3>
<pre> - ตารางประเภทสินค้า ประกอบด้วย attribute ดังนี้</pre>
<table border="1" align="center">
    <tr>
        <td>#</td>
        <td>Attribute Name</td>
        <td>Detail</td>
        <td>Data Type</td>
        <td>Key</td>
    </tr>
    <tr>
        <td>1</td>
        <td>typeid</td>
        <td>รหัสประเภทสินค้า</td>
        <td>int</td>
        <td>primary key</td>
    </tr>
    <tr>
        <td>2</td>
        <td>TypeName</td>
        <td>ชื่อประเภทสินค้า</td>
        <td>varchar(20)</td>
        <td></td>
        
    </tr>
</table>

<pre> - ตารางสินค้า ประกอบด้วย attribute ดังนี้</pre>
<table border="1" align="center">
    <tr>
        <td>#</td>
        <td>Attribute Name</td>
        <td>Detail</td>
        <td>Data Type</td>
        <td>Key</td>
    </tr>
    <tr>
        <td>1</td>
        <td>productId</td>
        <td>รหัสสินค้า</td>
        <td>int</td>
        <td>primary key</td>
    </tr>
    <tr>
        <td>2</td>
        <td>typeId</td>
        <td>รหัสประเภทสินค้า</td>
        <td>int</td>
        <td>foreign key</td>
    </tr>
    <tr>
        <td>3</td>
        <td>productName</td>
        <td>ชื่อสินค้า</td>
        <td>varchar(40)</td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>quantity</td>
        <td>จำนวนสินค้า</td>
        <td>int</td>
        <td></td>
    </tr>
    <tr>
        <td>5</td>
        <td>costPrice</td>
        <td>ราคาทุน/หน่วย</td>
        <td>float</td>
        <td></td>
    </tr>
    <tr>
        <td>6</td>
        <td>SellPrice</td>
        <td>ราคา/หน่วย</td>
        <td>float</td>
        <td></td>
    </tr>
</table>
<pre> - ตารางลูกค้า ประกอบด้วย attribute ดังนี้</pre>
<table border="1" align="center">
    <tr>
        <td>#</td>
        <td>Attribute Name</td>
        <td>Detail</td>
        <td>Data Type</td>
        <td>Key</td>
    </tr>
    <tr>
        <td>1</td>
        <td>id</td>
        <td>รหัสลูกค้า</td>
        <td>int</td>
        <td>primary key</td>
    </tr>
    <tr>
        <td>2</td>
        <td>phone</td>
        <td>เบอร์โทรศัพท์</td>
        <td>varchar(50)</td>
        <td>foreign key</td>
    </tr>
    <tr>
        <td>3</td>
        <td>firstname</td>
        <td>ชื่อลูกค้า</td>
        <td>varchar(30)</td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>lastname</td>
        <td>นามสกุลลูกค้า</td>
        <td>varchar(30)</td>
        <td></td>
    </tr>
    <tr>
        <td>5</td>
        <td>promotion</td>
        <td>โปรโมชั่นของลูกค้า</td>
        <td>varchar(50)</td>
        <td></td>
    </tr>
</table>
<pre> - ตารางประเภทลูกค้า ประกอบด้วย attribute ดังนี้</pre>
<table border="1" align="center">
    <tr>
        <td>#</td>
        <td>Attribute Name</td>
        <td>Detail</td>
        <td>Data Type</td>
        <td>Key</td>
    </tr>
    <tr>
        <td>1</td>
        <td>phone</td>
        <td>เบอร์โทรศัพท์</td>
        <td>varchar(50)</td>
        <td>primary key</td>
    </tr>
    <tr>
        <td>2</td>
        <td>total</td>
        <td>ยอดเงินหรือเครติครายเดือน</td>
        <td>varchar(20)</td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td>status</td>
        <td>สถานะของลูกค้า รายเดือน เติมเงิน</td>
        <td>varchar(10)</td>
        <td></td>
    </tr>
</table>


<h3>5) โปรแกรมสามารถทำงานได้ ดังนี้ <br>
- ประเภทสินค้า สามารถ เพิ่ม แก้ไข ลบ ได้ <br>
- สินค้า สามารถ เพิ่ม แก้ไข ลบ ได้ <br>
- ลูกค้า สามารถ เพิ่ม แก้ไขโปรโมชั่นและเติมเงินได้ <br>
- ดูรายงานคงเหลือแต่ละประเภทได้ ค้นหาได้
</h3>

</fieldset>
<center><button><a href="menu.php">หน้าหลัก</a></button></center>
</body>
</html>