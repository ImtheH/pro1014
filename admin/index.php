<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo '<script>alert("Bạn cần đăng nhập"); window.location.href = "../index.php";</script>';
    exit();
}
require_once 'controllers/dashboardController.php';
require_once 'controllers/productController.php';
require_once 'controllers/categoryController.php';
require_once 'controllers/clientController.php';
require_once 'controllers/commentController.php';
require_once 'controllers/thongkeController.php';
require_once 'models/productModel.php';
require_once 'models/categoryModel.php';
require_once 'models/clientModel.php';
require_once 'models/commentModel.php';
require_once 'models/thongkeModel.php';
require_once '../commons/function.php';
$act=$_GET['act']??'/';
match ($act) {
    '/' => (new dashboardController())->dashboard(),
    'listProduct' => (new productController())->listProduct(),
    'listCategory'=> (new categoryController())->listCategory(),
    'listClient' => (new clientController())->listClient(),
    'listComment' => (new commentController())->listComment(),
    'listThongKe' => (new thongkeController())->listThongKe(),
    'insertProduct' => (new productController())->insert(),
    'insertCategory'=>(new categoryController())->insertCategory(),
    'insertClient' => (new clientController())->insertClient(),
    'updateProduct'=> (new productController())->update($_GET['id']),
    'updateCategory'=> (new categoryController())->updateCategory($_GET['id']),
    'updateClient'=> (new clientController())->updateClient($_GET['id']),
    'deleteProduct'=> (new productController())->delete($_GET['id']),
    'deleteCategory'=> (new categoryController())->deleteCategory($_GET['id']),
    'deleteClient'=> (new clientController())->deleteClient($_GET['id']),
    'deleteComment' => (new commentController())->deleteComment($_GET['id']),
    'bieudo'=>(new thongkeController())->bieudo(),
};