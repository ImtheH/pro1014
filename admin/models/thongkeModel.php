<?php
class thongkeModel{
    public $conn;
    function __construct() {
        $this->conn = connDBAss();
    }
    function thongke()
    {
        $sql = "SELECT category.id_cat as id_cat,category.name_cat as name_cat, count(id_pro) as countsp, min(product.price_pro) as minprice, max(product.price_pro) as maxprice, avg(product.price_pro) as avgprice FROM product LEFT JOIN category ON product.id_cat = category.id_cat group by category.id_cat order BY category.id_cat desc";
        return $this->conn->query($sql)->fetchAll();
        
    }
}