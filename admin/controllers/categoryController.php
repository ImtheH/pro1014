<?php

class categoryController{
    public $categoryModel;
    function __construct(){
        $this->categoryModel = new categoryModel();
    }
    function listCategory() {
        $category = $this->categoryModel->category();
        require_once 'views/listCategory.php';
    }
    function insertCategory(){
        require_once 'views/insertCategory.php';
        if (isset($_POST['btn_insertCate'])) {
            $name=$_POST['name'];
            if ($this->categoryModel->insertCategory($name)) {
                header("Location:?act=listCategory");
            }else{
                echo "Thêm thất bại";
            }
        }
    }
    function updateCategory($id) {
        $oneCategory = $this->categoryModel->findCategoryById($id);
        require_once "views/updateCategory.php";
        if (isset($_POST['btn_updateCate'])) {
            $name=$_POST['name'];
            if ($this->categoryModel->updateCategory($id,$name)) {
                header("Location:?act=listCategory");
            }else{
                echo "Sửa thất bại";
            }
        }
    }
    function deleteCategory($id) {
        if($this->categoryModel->deleteCategory($id)){
            header("Location:?act=listCategory");
        }
        else{
            echo "Xóa thất bại";
        }
    }
}