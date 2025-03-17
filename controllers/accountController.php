<?php
class accountController{
    public $accountModel;
    function __construct(){
        $this->accountModel = new accountModel();
    }
    function register(){
        if (isset($_POST['btn_register'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $re_pass = $_POST['re_pass'];
            $email = $_POST['email'];
            $diachi = $_POST['diachi'];
            $dienthoai = $_POST['dienthoai'];
            $role = 2;
            $errors = [];
            if (strlen($user) < 3 || strlen($user) > 30) {
                $errors[] = "Độ dài Username phải nằm trong khoảng 3 đến 30 ký tự.";
            } elseif ($this->accountModel->checkUsername($user) > 0) {
                $errors[] = "Username đã tồn tại.";
            }
            if (strlen($pass) < 5 || strlen($pass) > 10) {
                $errors[] = "Độ dài Password phải nằm trong khoảng 5 đến 10 ký tự.";
            } elseif ($pass!= $re_pass) {
                $errors[] = "Password nhập lại không đúng.";
            }
            if (empty($errors)) {
                $this->accountModel->insertAccount($user, $pass, $email, $diachi, $dienthoai, $role);
                $_SESSION['register_success'] = "Đăng ký thành công!";
                header("location:?act=/");
                exit();
            }
            if (!empty($errors)) {
                $_SESSION['register_errors'] = $errors;
                header("location:?act=dangky");
                exit();
            }           
        }
        require_once 'views/dangky.php';
    }
    function login(){
        if (isset($_POST['btn_login'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $errors = [];
            if (empty($user)) {
                $errors[] = "Username không được để trống.";
            } elseif (strlen($user) < 3 || strlen($user) > 30) {
                $errors[] = "Độ dài Username phải nằm trong khoảng 3 đến 30 ký tự.";
            }

            if (empty($pass)) {
                $errors[] = "Password không được để trống.";
            } elseif (strlen($pass) < 5 || strlen($pass) > 10) {
                $errors[] = "Độ dài Password phải nằm trong khoảng 5 đến 10 ký tự.";
            }

            if (empty($errors)) {
                if ($this->accountModel->checkAccount($user, $pass) > 0) {
                    $_SESSION['user'] = $user;
                    header("location:?act=/");
                    exit();
                } else {
                    if ($this->accountModel->checkUsername($user) == 0) {
                        $errors[] = "Username đã nhập sai.";
                    } else {
                        $errors[] = "Password đã nhập sai.";
                    }
                }
            }
            if (!empty($errors)) {
                $_SESSION['login_errors'] = $errors;
                header("Location:?act=/");
                exit();
            }
        }
    }
    function logout() {
        unset($_SESSION["user"]);
        header("location:?act=/");
        exit();
    }
}