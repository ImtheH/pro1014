<?php
class accountModel{
    public $conn;
    function __construct(){
        $this->conn = connDBAss();
    }
    function checkAccount($user,$pass){
        $sql="select * from account where user='$user' and pass='$pass'";
        return $this->conn->query($sql)->rowCount();
    }
    function checkUsername($user){
        $sql="select * from account where user='$user'";
        return $this->conn->query($sql)->rowCount();
    }
    function insertAccount($user, $pass, $email, $diachi, $dienthoai, $role){
        $sql="INSERT INTO account values (null,'$user','$pass','$email','$diachi','$dienthoai',$role)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
}