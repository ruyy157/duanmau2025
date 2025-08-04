<?php
// có class chứa các function thực thi xử lý logic 
class HomeController
{
    public $modelProduct;
    public $modelDanhMuc;
    public $modelTaiKhoan;
    public $modelBinhLuan;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
        $this->modelDanhMuc = new DanhMucModel();
        $this->modelTaiKhoan = new TaiKhoanModel();
        $this->modelBinhLuan = new BinhLuanModel();
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
        $listBinhLuan = $this->modelBinhLuan->getBinhLuanFormSanPham($id);
        $listSanPhamCungDanhMuc = $this->modelProduct->getListSanPhamDanhMuc($sanPham['danh_muc_id']);
        if ($sanPham) {
            require_once './views/chitietsanpham.php';
        } else {
            header("Location:" . BASE_URL);
            exit();
        }
    }
    public function formLogin()
    {
        require_once './views/auth/formLogin.php';
        deleteSessionError();
    }
    public function formDangKy()
    {
        require_once './views/auth/formDangKy.php';
        deleteSessionError();
    }
    public function postDangKy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hoten = $_POST['hoten'] ?? '';
            $email = $_POST['email'] ?? '';
            $matkhau = $_POST['matkhau'] ?? '';
            $nhaplaimatkhau = $_POST['nhaplaimatkhau'] ?? '';

            if (empty($email) || empty($matkhau) || empty($nhaplaimatkhau) || empty($hoten)) {
                $_SESSION['error'] = "Vui lòng điền đầy đủ thông tin!";
                header("Location: " . BASE_URL . "?act=formdangky");
                exit;
            }

            if ($matkhau !== $nhaplaimatkhau) {
                $_SESSION['error'] = "Mật khẩu không trùng khớp!";
                header("Location: " . BASE_URL . "?act=formdangky");
                exit;
            }

            if ($this->modelTaiKhoan->getTaiKhoanFormEmail($email)) {
                $_SESSION['error'] = "Email đã tồn tại!";
                header("Location: " . BASE_URL . "?act=formdangky");
                exit;
            }

            $hashedPassword = password_hash($matkhau, PASSWORD_DEFAULT);
            $this->modelTaiKhoan->themTaiKhoanMoi($hoten, $email, $hashedPassword);

            $_SESSION['success'] = "Đăng ký thành công! Hãy đăng nhập.";
            header("Location: " . BASE_URL . "?act=login");
            exit;
        }
    }




   public function postLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //lấy email và pass gửi lên form
            $email = $_POST['email'];
            $password = $_POST['password'];
            // var_dump($password);die;
            $user = $this->modelTaiKhoan->checkLogin($email, $password);

            if ($user) {
                $_SESSION['user_client'] = $user;
                header("Location:" . BASE_URL);
                exit;
            } else {
                $_SESSION['error'] = $user;

                $_SESSION['flash'] = true;

                header("Location:" . BASE_URL . '?act=login');
                exit();
            }
        }
    }

    public function logoutClient()
    {
        if (isset($_SESSION['user_client'])) {
            unset($_SESSION['user_client']);
            header("Location:" . BASE_URL );
        }
    }
   public function postAddBinhLuan()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_san_pham = $_POST['id_san_pham'] ?? null;
        $noidung = trim($_POST['noidung'] ?? '');

        // Kiểm tra đăng nhập
        if (!isset($_SESSION['user_client'])) {
            $_SESSION['error'] = "Bạn cần đăng nhập để bình luận!";
            header("Location: " . BASE_URL . "?act=chitietsanpham&id_san_pham=" . $id_san_pham);
            exit;
        }

        if (empty($noidung)) {
            $_SESSION['error'] = "Nội dung bình luận không được để trống!";
            header("Location: " . BASE_URL . "?act=chitietsanpham&id_san_pham=" . $id_san_pham);
            exit;
        }
        $user_id = $_SESSION['user_client']['id'];
        $ngaydang = date('Y-m-d H:i:s');
        $trangthai = 1; // 1 = hiển thị, 0 = bị ẩn

        $this->modelBinhLuan->insertBinhLuan($id_san_pham, $user_id, $noidung, $ngaydang, $trangthai);

        header("Location: " . BASE_URL . "?act=chitietsanpham&id_san_pham=" . $id_san_pham);
        exit;
    }
}

}
