<?php
class mainModel{
    public $conn;
    function __construct() {
        $this->conn = connDBAss();
    }
    function allProduct() {
        $sql="SELECT * FROM product order by id_pro desc";
        return $this->conn->query($sql)->fetchAll();
    }
    function laptopProduct() {
        $sql="SELECT * FROM product WHERE id_cat = 1";
        return $this->conn->query($sql)->fetchAll();
    }
    function dienthoaiProduct() {
        $sql="SELECT * FROM product WHERE id_cat = 2";
        return $this->conn->query($sql)->fetchAll();
    }
    function maytinhbangProduct() {
        $sql="SELECT * FROM product WHERE id_cat = 3";
        return $this->conn->query($sql)->fetchAll();
    }
    function top10Product() {
        $sql="SELECT * FROM product order by view_pro desc limit 10";
        return $this->conn->query($sql)->fetchAll();
    }
    function allCategory(){
        $sql="SELECT * FROM category";
        return $this->conn->query($sql)->fetchAll();
    }
    function findProductById($id) {
        $sql="SELECT * FROM product WHERE id_pro=$id";
        return $this->conn->query($sql)->fetch();
    }
    function relatedProduct($id_cat,$id_pro) {
        $sql="SELECT * FROM product WHERE id_cat=$id_cat AND id_pro!= $id_pro";
        return $this->conn->query($sql)->fetchAll();
    }
    function searchProducts($search){
        $sql="SELECT * FROM product WHERE name_pro LIKE '%".$search."%'";
        return $this->conn->query($sql)->fetchAll();
    }
    function searchProductLaptop($search){
        $sql="SELECT * FROM product WHERE id_cat = 1 and name_pro LIKE '%".$search."%'";
        return $this->conn->query($sql)->fetchAll();
    }
    function searchProductDienThoai($search){
        $sql="SELECT * FROM product WHERE id_cat = 2 and name_pro LIKE '%".$search."%'";
        return $this->conn->query($sql)->fetchAll();
    }
    function searchProductMayTinhBang($search){
        $sql="SELECT * FROM product WHERE id_cat = 3 and name_pro LIKE '%".$search."%'";
        return $this->conn->query($sql)->fetchAll();
    }
    function updateView($id) {
        $sql="UPDATE product SET view_pro = view_pro + 1 WHERE id_pro=$id";
        return $this->conn->query($sql);
    }
    function allComment($id){
        $sql="SELECT * FROM comment WHERE id_pro=$id";
        return $this->conn->query($sql)->fetchAll();
    }
    function addComment($detail_com,$user,$id_pro,$date_com) {
        $sql="INSERT INTO comment values (null,'$detail_com','$user',$id_pro,'$date_com')";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
}