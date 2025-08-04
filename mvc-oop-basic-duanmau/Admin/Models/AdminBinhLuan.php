<?php
class AdminBinhLuan
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Lấy tất cả bình luận (bao gồm thông tin sản phẩm và tài khoản)
    public function getAllBinhLuan()
    {
        try {
            $sql = 'SELECT binhluan.*, sanpham.tensp, taikhoan.hoten
                    FROM binhluan
                    INNER JOIN sanpham ON binhluan.san_pham_id = sanpham.id
                    INNER JOIN taikhoan ON binhluan.tai_khoan_id = taikhoan.id
                    ORDER BY binhluan.ngaydang DESC';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return [];
        }
    }

    // Ẩn bình luận (trangthai = 0)
    public function anBinhLuan($id_binhluan)
    {
        try {
            $sql = "UPDATE binhluan SET trangthai = 0 WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id_binhluan]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi khi ẩn bình luận: " . $e->getMessage();
            return false;
        }
    }

    // Hiện lại bình luận (trangthai = 1)
    public function hienBinhLuan($id_binhluan)
    {
        try {
            $sql = "UPDATE binhluan SET trangthai = 1 WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id_binhluan]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi khi hiện bình luận: " . $e->getMessage();
            return false;
        }
    }
}
