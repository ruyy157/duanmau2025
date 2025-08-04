<?php
class AdminDanhMucContronller{
    public $modelDanhMuc;
    public function __construct(){
        $this->modelDanhMuc= new AdminDanhMuc();
    }
      public function home(){
            require_once './home.php';
        }
    public function danhSachDanhMuc(){
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        require_once './Views/danhmuc/List.php';
    }
    public function formAddDanhMuc(){
        require_once './Views/danhmuc/Add.php';
    }
  public function postAddDanhMuc() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tendanhmuc = $_POST['tendanhmuc'] ?? '';
        $errors = [];

        if (empty($tendanhmuc)) {
            $errors['tendanhmuc'] = 'Tên danh mục không được để trống';
        }

        if (empty($errors)) {
            $this->modelDanhMuc->insertDanhMuc($tendanhmuc);
            $_SESSION['success'] = "Thêm danh mục thành công!";
            header("Location: " . BASE_URL_ADMIN . '?act=danhmuc');
            exit();
        } else {
            // Gửi biến lỗi sang view
            require_once './Views/danhmuc/Add.php';
        }
    }
}


    public function formEditDanhMuc(){
        $id = $_GET['iddanhmuc'];
        $danhMuc= $this->modelDanhMuc->getDetailDanhMuc($id);
        if ($danhMuc) {
            require_once './Views/danhmuc/Edit.php';
        }else{
            header("Location:". BASE_URL_ADMIN .'?act=danhmuc');
            exit();
        }
       
    }
    public function postEditDanhMuc()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $tendanhmuc = $_POST['tendanhmuc'];
        $errors = [];

        if (empty($tendanhmuc)) {
            $errors['tendanhmuc'] = "Tên danh mục không được để trống.";
        }

        if (empty($errors)) {
            $this->modelDanhMuc->updateDanhMuc($id, $tendanhmuc);
            $_SESSION['success'] = "Cập nhật danh mục thành công!";
            header("Location:" . BASE_URL_ADMIN . '?act=danhmuc');
            exit();
        } else {
            $danhMuc = ['id' => $id, 'tendanhmuc' => $tendanhmuc];
            require_once './Views/danhmuc/Edit.php';
        }
    }
}

    public function deleteDanhMuc(){
        $id = $_GET['iddanhmuc'];
        $danhMuc= $this->modelDanhMuc->getDetailDanhMuc($id);
        if($danhMuc){
            $this->modelDanhMuc->destroyDanhMuc($id);
        }
        header("Location:". BASE_URL_ADMIN .'?act=danhmuc');
                exit();
    }
}
?>