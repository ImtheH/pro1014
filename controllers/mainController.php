<?php
class maincontroller
{
    public $mainModel;
    function __construct()
    {
        $this->mainModel = new mainModel();
    }
    function trangChu()
    {
        if (isset($_POST['search'])) {
            $product = $this->mainModel->searchProducts($_POST['search']);
        } else {
            $product = $this->mainModel->allProduct();
        }
        $category = $this->mainModel->allCategory();
        $top10Pro = $this->mainModel->top10Product();
        require_once 'views/Trangchu.php';
    }
    function laptop()
    {
        if (isset($_POST['search'])) {
            $product = $this->mainModel->searchProductLaptop($_POST['search']);
        } else {
            $product = $this->mainModel->laptopProduct();
        }
        $category = $this->mainModel->allCategory();
        $top10Pro = $this->mainModel->top10Product();
        require_once 'views/laptop.php';
    }
    function dienThoai()
    {
        if (isset($_POST['search'])) {
            $product = $this->mainModel->searchProductDienThoai($_POST['search']);
        } else {
            $product = $this->mainModel->dienthoaiProduct();
        }
        $category = $this->mainModel->allCategory();
        $top10Pro = $this->mainModel->top10Product();
        require_once 'views/dienthoai.php';
    }
    function mayTinhBang()
    {
        if (isset($_POST['search'])) {
            $product = $this->mainModel->searchProductMayTinhBang($_POST['search']);
        } else {
            $product = $this->mainModel->maytinhbangProduct();
        }
        $category = $this->mainModel->allCategory();
        $top10Pro = $this->mainModel->top10Product();
        require_once 'views/mayTinhBang.php';
    }
    function detail($id)
    {
        $this->mainModel->updateView($id);
        $product = $this->mainModel->allProduct();
        $category = $this->mainModel->allCategory();
        $productOne = $this->mainModel->findProductById($id);
        $top10Pro = $this->mainModel->top10Product();
        $comments = $this->mainModel->allComment($id);
        $relatedProduct= $this->mainModel->relatedProduct($productOne['id_cat'],$id);
        require_once 'views/detailProduct.php';
    }
    function addComment()
    {
        if (isset($_POST['detail']) && isset($_POST['id_pro'])) {
            if (!isset($_SESSION['user'])) {
                echo "Bạn cần đăng nhập để có thể bình luận";
                exit();
            }
            $detail_com = $_POST['detail'];
            $user = $_SESSION['user'];
            $id_pro = $_POST['id_pro'];
            $date_com = date('Y-m-d');
            $this->mainModel->addComment($detail_com, $user, $id_pro, $date_com);            
            exit();
        }
    }
    function admin()
    {
        require_once 'admin/index.php';
    }
}