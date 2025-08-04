<?php
class BinhLuanModel
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllBinhLuan()
    {
        try {
            $sql = "SELECT * FROM binhluan ORDER BY id DESC limit 3";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo 'Lỗi: ' . $e->getMessage();
            return false;
        }
    }
    public function insertBinhLuan($san_pham_id, $tai_khoan_id, $noidung, $ngaydang,$trangthai)
    {
        try {
            $sql = "INSERT INTO binhluan (san_pham_id, tai_khoan_id, noidung, ngaydang,trangthai)
                VALUES (:san_pham_id, :tai_khoan_id, :noidung, :ngaydang,:trangthai)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':san_pham_id' => $san_pham_id,
                ':tai_khoan_id' => $tai_khoan_id,
                ':noidung' => $noidung,
                ':ngaydang' => $ngaydang,
                ':trangthai' => $trangthai,
            ]);
        } catch (\Exception $e) {
            echo 'Lỗi: ' . $e->getMessage();
            return false;
        }
    }

    public function getBinhLuanFormSanPham($id)
    {

        try {
            $sql = 'SELECT binhluan.*, taikhoan.hoten
                    FROM binhluan
                    INNER JOIN taikhoan 
                    ON binhluan.tai_khoan_id = taikhoan.id
                    WHERE binhluan.san_pham_id= :id
                    AND binhluan.trangthai = 1
                    ORDER BY binhluan.id DESC
                    LIMIT 3
                    ';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
