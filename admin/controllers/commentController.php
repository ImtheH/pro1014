<?php
class commentController{
    public $commentModel;
    function __construct(){
        $this->commentModel = new commentModel();
    }
    function listComment(){
        $comments = $this->commentModel->comment();
        require_once 'views/listComment.php';
    }
    function deleteComment($id)
    {
        if ($this->commentModel->deleteComment($id)) {
            header("Location:?act=listComment");
        } else {
            echo "Xóa thất bại";
        }
    }
    
}