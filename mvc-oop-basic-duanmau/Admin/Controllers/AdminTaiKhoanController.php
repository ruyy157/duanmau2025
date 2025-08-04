<?php
class AdminTaiKhoanController
{
    public $modelTaiKhoan;

    public function __construct()
    {
        $this->modelTaiKhoan = new AdminTaiKhoan();
    }
    public function formDangKy()
    {
        require_once './Views/Login/formDangKy.php';
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
            header("Location: " . BASE_URL_ADMIN . "?act=formdangky");
            exit;
        }

        if ($matkhau !== $nhaplaimatkhau) {
            $_SESSION['error'] = "Mật khẩu không trùng khớp!";
            header("Location: " . BASE_URL_ADMIN . "?act=formdangky");
            exit;
        }

        if ($this->modelTaiKhoan->getTaiKhoanFormEmail($email)) {
            $_SESSION['error'] = "Email đã tồn tại!";
            header("Location: " . BASE_URL_ADMIN . "?act=formdangky");
            exit;
        }

        $hashedPassword = password_hash($matkhau, PASSWORD_DEFAULT);
        $this->modelTaiKhoan->themTaiKhoanMoi($hoten,$email, $hashedPassword );

        $_SESSION['success'] = "Đăng ký thành công! Hãy đăng nhập.";
        header("Location: " . BASE_URL_ADMIN . "?act=loginadmin");
        exit;
    }
}


    public function formLogin()
    {
        require_once './Views/Login/formLogin.php';
        deleteSessionError();
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->modelTaiKhoan->checkLogin($email, $password);

            if ($user) {
                $_SESSION['user_admin'] = $user;
                header("Location: " . BASE_URL_ADMIN);
                exit;
            } else {
                $_SESSION['error'] = "Email hoặc mật khẩu không đúng!";
                header("Location: " . BASE_URL_ADMIN . "?act=loginadmin");
                exit;
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL_ADMIN . "?act=loginadmin");
        exit;
    }
    public function listTaiKhoan()
    {
        $listtaikhoan = $this->modelTaiKhoan->getAllTaiKhoan();
        require_once './Views/taikhoan/taikhoanadmin/list.php';
    }
}
