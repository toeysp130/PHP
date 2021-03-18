<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE MyGuests (    
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    //CURRENT_TIMESTAMP คือ กำหนดค่าเวลาที่เพิ่มข้อมูลลงใน  record
    //var char คือใช้พื้นที่เท่าที่ตัวแปรจะใช้ข้อมูล เช่น จอง varcharขนาด 30 แต่ข้อมูลที่กรอกเข้ามา คือ10 จะใช้พื้นที่แค่10ในการเก็บข้อมูล
    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    mysqli_close($conn);
?>