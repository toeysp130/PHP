<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Wat ', 'C', 'wat1@itkmutnb.ac.th');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Wak ', 'C', 'wat2@itkmutnb.ac.th');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Warak ', 'C', 'wat3@itkmutnb.ac.th');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Watrak ', 'C', 'wat4@itkmutnb.ac.th');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>