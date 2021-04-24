<?php 
    class DB_con{
        function __construct()
        {
            $conn = mysqli_connect('localhost','wat','toey2543','crud_oop');
            $this->dbcon = $conn;
            mysqli_query($this->dbcon,"SET NAMES UTF8");
            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL : ". mysqli_connect_error();
            }
            
        }
        public function insert($firstname,$lastname,$email,$phonenumber,$address){
            $result = mysqli_query($this->dbcon,"INSERT INTO tbluser(firstname,lastname,email,phonenumber,address) 
            VALUE ('$firstname','$lastname','$email','$phonenumber','$address')");
            return $result;
        }
        public function fetchdata(){
            $result = mysqli_query($this->dbcon,"SELECT * FROM tbluser");
            return $result;
        }
        public function fetchonerecord($userid){
            $result = mysqli_query($this->dbcon,"SELECT * FROM tbluser WHERE id = '$userid'");
            return $result;
        }
        public function update($firstname,$lastname,$email,$phonenumber,$address,$userid){
            $result = mysqli_query($this->dbcon,"UPDATE tbluser SET 
             firstname = '$firstname',
             lastname = '$lastname',
             email = '$email',
             phonenumber = '$phonenumber',
             address = '$address'
             WHERE id = '$userid'
             "); 
            return $result;
        }
        public function delete($userid){
            $result = mysqli_query($this->dbcon,"DELETE FROM tbluser WHERE id = '$userid'");
            return $result;
        }
    }
?>