<?php
class thongkeController
{
    public $thongkeModel;
    function __construct()
    {
        $this->thongkeModel = new thongkeModel();
    }
    function listThongke()
    {
        $thongke = $this->thongkeModel->thongke();
        require_once 'views/listthongke.php';
    }
    function bieudo(){
        $thongke = $this->thongkeModel->thongke();
        require_once 'views/bieudo.php';
    }
}