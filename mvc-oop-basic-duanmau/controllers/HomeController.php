<?php
// có class chứa các function thực thi xử lý logic 
class HomeController
{
    public $modelProduct;
    public $modelDanhMuc;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
        $this->modelDanhMuc = new DanhMucModel();
    }

    public function Home()
    {
      $listSanPham = $this->modelProduct->getAllSanPham();
      $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
      require_once './views/trangchu.php';
    }
    public function trangSanPham()
    {
        $listSanPham = $this->modelProduct->getAllSanPham();
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        require_once './views/trangsp.php';
    }
    public function DetailSanPham()
    {
        $id = $_GET['id_san_pham']; // Lấy id từ URL
        $sanPham = $this->modelProduct->getDetailSanPham($id);
        // $listBinhLuan = $this->modelProduct->getBinhLuanFormSanPham($id);

        $listSanPhamCungDanhMuc = $this->modelProduct->getListSanPhamDanhMuc($sanPham['danh_muc_id']);
        if ($sanPham) {
            require_once './views/chitietsanpham.php';
        } else {
            header("Location:" . BASE_URL);
            exit();
        }
    }
   
}
