<?php 
class TaiKhoanModel{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function checkLogin($email, $matkhau)
    {
        try {
            $sql = "SELECT * FROM taikhoan WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch();

            if ($user && password_verify($matkhau, $user['matkhau'])) {
                return $user;
            } else {
                return false;
            }
//             var_dump($user);
// var_dump($user['matkhau']);
// var_dump(password_verify($matkhau, $user['matkhau']));
// die();

        } catch (\Exception $e) {
            echo 'Lỗi: ' . $e->getMessage();
            return false;
        }
    }

    public function getTaiKhoanFormEmail($email)
    {
        try {
            $sql = 'SELECT * FROM taikhoan WHERE email = :email';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':email' => $email]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "lỗi: " . $e->getMessage();
            return false;
        }
    }

    public function themTaiKhoanMoi($hoten,$email, $matkhau,)
    {
        try {
            $sql = "INSERT INTO taikhoan (hoten,email, matkhau) VALUES (:hoten, :email, :matkhau)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':hoten' => $hoten,
                ':email' => $email,
                ':matkhau' => $matkhau,
            ]);
        } catch (\Exception $e) {
            echo "Lỗi khi thêm tài khoản: " . $e->getMessage();
            return false;
        }
    }

}