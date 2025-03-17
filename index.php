<?php
session_start();
if (isset($_SESSION['register_success'])) {
    $successMessage = $_SESSION['register_success'];
    unset($_SESSION['register_success']);
    echo "<script>alert('$successMessage');</script>";
}
require_once 'controllers/mainController.php';
require_once 'controllers/gioiThieuController.php';
require_once 'controllers/accountController.php';
require_once 'models/mainModel.php';
require_once 'models/accountModel.php';
require_once 'commons/function.php';
$act=$_GET['act']??'/';
match ($act) {
    '/' => (new maincontroller())->trangChu(),
    '1' => (new maincontroller())->laptop(),
    '2' => (new maincontroller())->dienThoai(),
    '3' => (new maincontroller())->mayTinhBang(),
    'detailPro' => (new maincontroller())->detail($_GET['id']),
    'addComment' => (new maincontroller())->addComment(),
    'gioiThieu' => (new gioiThieuController())->gioiThieu(),
    'dangky' =>(new AccountController())->register(),
    'login' => (new AccountController())->login(),
    'logout' => (new AccountController())->logout(),
    'admin' => (new mainController())->admin(),
};