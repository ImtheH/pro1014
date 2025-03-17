<?php
class categoryModel{
    public $conn;
    function __construct() {
        $this->conn = connDBAss();
    }
    function category() {
        $sql="SELECT * FROM category order by id_cat desc";
        return $this->conn->query($sql)->fetchAll();
    }
    function findCategoryById($id) {
        $sql="SELECT * FROM category WHERE id_cat=$id";
        return $this->conn->query($sql)->fetch();
    }
    function insertCategory($name) {
        $sql="INSERT INTO category values (null,'$name')";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function updateCategory($id,$name) {
        $sql="UPDATE category SET name_cat='$name' WHERE id_cat=$id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function deleteCategory($id) {
            $sql="DELETE from category where id_cat=$id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
    }
    
}