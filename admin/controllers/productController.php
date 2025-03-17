<?php
class productController{
    public $productModel;
    function __construct(){
        $this->productModel = new productModel();
    }
    function listProduct() {
        $products = $this->productModel->product();
        require_once "views/listProduct.php";
    }
    function insert() {
        $category = $this->productModel->category();
        require_once "views/insertProduct.php";
        if (isset($_POST['btn_insert'])) {
            $name=$_POST['name'];
            $price=$_POST['price'];
            $detail=$_POST['detail'];
            $cate=$_POST['cate'];
            $img=$_FILES['img']['name'];
            $img_tmp=$_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp,'../assets/images/'.$img);
            if ($this->productModel->insert($name,$img,$price,$detail,$cate)) {
                header("Location:?act=listProduct");
            }else{
                echo "Thêm thất bại";
            }
        }
    }
    function update($id) {
        $oneProduct = $this->productModel->findProductById($id);
        $category = $this->productModel->category();
        require_once "views/updateProduct.php";
        if (isset($_POST['btn_update'])) {
            $name=$_POST['name'];
            $price=$_POST['price'];
            $detail=$_POST['detail'];
            $cate_id=$_POST['cate'];
            if (empty($_FILES['img']['name'])) {
                $img="";
            } else {
                $img=$_FILES['img']['name'];
                $img_tmp=$_FILES['img']['tmp_name'];
                move_uploaded_file($img_tmp,'../assets/images/'.$img);
            }
            if ($this->productModel->update($id,$name,$img,$price,$detail,$cate_id)) {
                header("Location:?act=listProduct");
            }else{
                echo "Sửa thất bại";
            }
        }
    }
    function delete($id) {
        if($this->productModel->delete($id)){
            header("Location:?act=listProduct");
        }
        else{
            echo "Xóa thất bại";
        }
    }
}