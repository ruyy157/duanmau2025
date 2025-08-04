<?php
class AdminBinhLuanController{
    public $modelBinhLuan;
    public function __construct(){
        $this->modelBinhLuan= new AdminBinhLuan();
    }

    public function listbinhluan(){
        $listbinhluan = $this->modelBinhLuan->getAllBinhLuan();
        require_once './Views/binhluan/list.php';
    }
    public function anBinhLuan()
{
    $id = $_GET['id'] ?? null;
    if ($id && $this->modelBinhLuan->anBinhLuan($id)) {
        $_SESSION['danger'] = "Đã ẩn bình luận.";
    } else {
        $_SESSION['error'] = "Ẩn bình luận thất bại.";
    }
    header("Location: " . BASE_URL_ADMIN . "?act=listbinhluan");
}

public function hienBinhLuan()
{
    $id = $_GET['id'] ?? null;
    if ($id && $this->modelBinhLuan->hienBinhLuan($id)) {
        $_SESSION['success'] = "Đã hiện bình luận.";
    } else {
        $_SESSION['error'] = "Hiện bình luận thất bại.";
    }
    header("Location: " . BASE_URL_ADMIN . "?act=listbinhluan");
}

}
