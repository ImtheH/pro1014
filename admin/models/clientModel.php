<?php
class clientModel
{
    public $conn;
    function __construct()
    {
        $this->conn = connDBAss();
    }
    function client()
    {
        $sql = "SELECT * FROM account order by id desc";
        return $this->conn->query($sql)->fetchAll();
    }
    function findClientById($id)
    {
        $sql = "SELECT * FROM account WHERE id=$id";
        return $this->conn->query($sql)->fetch();
    }
    function insertClient($user, $pass, $email, $diachi, $dienthoai, $role)
    {
        $sql = "INSERT INTO account values (null,'$user','$pass','$email','$diachi','$dienthoai',$role)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function updateClient($id, $user, $pass, $email, $diachi, $dienthoai, $role)
    {
        $sql = "UPDATE account SET user='$user',pass='$pass',email='$email',diachi='$diachi',dienthoai='$dienthoai',role=$role WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function deleteClient($id)
    {
        $sql = "DELETE from account where id=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }

}