<?php
class Admindanhmuccontroller
{
    public $modelDanhmuc;

    public function __construct()
    {
        $this->modelDanhmuc = new AdminDanhmuc();
    }
     public function home(){
            require_once './View/home.php';
        }
    public function danhSachDanhMuc()
    {
        $listDanhMuc = $this->modelDanhmuc->getAllDanhmuc();
        require_once './View/Danhmuc/Listdanhmuc.php';
    }
    public function formAddDanhMuc()
    {
        require_once './View/Danhmuc/Add.php';
    }
    public function formEditDanhMuc()
    {
        $id = $_GET['iddanhmuc'];
        $danhMuc = $this->modelDanhmuc->getDetailDanhMuc($id);
        if ($danhMuc) {
            require_once './View/Danhmuc/Edit.php';
        } else {
            header("Location:" . BASE_URL_ADMIN . '?act=danhmuc');
            exit();
        }
    }
    public function postAddDanhMuc()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tendanhmuc = $_POST['tendanhmuc'];
            $errors = [];
            if (empty($tendanhmuc)) {
                $errors['tendanhmuc'] = 'tên danh mục không được để trống';
            }
            if (empty($errors)) {
                $this->modelDanhmuc->insertDanhMuc($tendanhmuc);
                header("Location:" . BASE_URL_ADMIN . '?act=danhmuc');
                exit();
            } else {
                require_once './View/Danhmuc/Add.php';
            }
        }
    }
    public function postEditDanhMuc()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $tendanhmuc = $_POST['tendanhmuc'];
            $errors = [];
            if (empty($tendanhmuc)) {
                $errors['tendanhmuc'] = 'tên danh mục không được để trống';
            }
            if (empty($errors)) {
                $this->modelDanhmuc->updateDanhMuc($id, $tendanhmuc);
                header("Location:" . BASE_URL_ADMIN . '?act=danhmuc');
                exit();
            } else {
                $danhMuc = ['id' => $id, 'tendanhmuc' => $tendanhmuc];
                require_once './View/Danhmuc/Edit.php';
            }
        }
    }


    public function deleteDanhMuc()
    {
        $id = $_GET['iddanhmuc'];
        $danhMuc = $this->modelDanhmuc->getDetailDanhMuc($id);
        if ($danhMuc) {
            $this->modelDanhmuc->destroyDanhMuc($id);
        }
        header("Location:" . BASE_URL_ADMIN . '?act=danhmuc');
        exit();
    }
}
