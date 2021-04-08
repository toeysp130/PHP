<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "departmentstore";
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$qu = $_POST['qu'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO goods (goosid, goodsName, goodsPrice, goodQuantity) 
        VALUES ('$id','$name','$price','$qu')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: add_good.php");
?>
