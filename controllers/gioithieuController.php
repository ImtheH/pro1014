<?php
class gioiThieuController{
    public $mainModel;
    function __construct(){
        $this->mainModel = new mainModel();
    }
    function gioiThieu(){
        $category=$this->mainModel->allCategory();
        $top10Pro = $this->mainModel->top10Product();
        require_once 'views/gioiThieu.php';
    }
}