<?php
class clientController
{
    public $clientModel;
    function __construct()
    {
        $this->clientModel = new clientModel();
    }
    function listClient()
    {
        $client = $this->clientModel->Client();
        require_once 'views/listClient.php';
    }
    function insertClient()
    {
        require_once 'views/insertClient.php';
        if (isset($_POST['btn_insertClient'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $role = $_POST['role'];
            if ($this->clientModel->insertClient($user, $pass, $email, $diachi, $dienthoai, $role)) {
                header("Location:?act=listClient");
            } else {
                echo "Thêm thất bại";
            }
        }
    }
    function updateClient($id)
    {
        $oneClient = $this->clientModel->findClientById($id);
        require_once "views/updateClient.php";
        if (isset($_POST['btn_updateClient'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $role = $_POST['role'];
            if ($this->clientModel->updateClient($id, $user, $pass, $email, $diachi, $dienthoai, $role)) {
                header("Location:?act=listClient");
            } else {
                echo "Sửa thất bại";
            }
        }
    }
    function deleteClient($id)
    {
        if ($this->clientModel->deleteClient($id)) {
            header("Location:?act=listClient");
        } else {
            echo "Xóa thất bại";
        }
    }
}