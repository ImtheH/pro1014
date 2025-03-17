<?php
class productModel{
    public $conn;
    function __construct() {
        $this->conn = connDBAss();
    }
    function product() {
        $sql="SELECT * FROM product JOIN category ON category.id_cat=product.id_cat order by id_pro desc";
        return $this->conn->query($sql)->fetchAll();
    }
    function category() {
        $sql="SELECT * FROM category";
        return $this->conn->query($sql)->fetchAll();
    }
    function findProductById($id) {
        $sql="SELECT * FROM product WHERE id_pro=$id";
        return $this->conn->query($sql)->fetch();
    }
    function insert($name,$img,$price,$detail,$cate_id) {
        $sql="INSERT INTO product values (null,'$img','$name',$price,$cate_id,'$detail',0)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function update($id,$name,$img,$price,$detail,$cate_id) {
        if (empty($img)) {
            $sql="UPDATE product SET name_pro='$name',price_pro=$price,detail_pro='$detail',id_cat=$cate_id WHERE id_Pro=$id";
        }else {
            $sql="UPDATE product SET name_pro='$name',img='$img',price_pro=$price,detail_pro='$detail',id_cat=$cate_id WHERE id_Pro=$id";
        }
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function delete($id) {
            $sql="DELETE from product where id_Pro=$id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
    }
    
}
