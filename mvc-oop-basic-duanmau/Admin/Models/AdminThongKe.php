<?php
class AdminThongKe
{

    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Tổng số sản phẩm
    public function getTongSanPham()
    {
        $sql = "SELECT COUNT(*) AS tong_san_pham FROM sanpham";
        return $this->conn->query($sql)->fetch();
    }

    // Tổng số danh mục
    public function getTongDanhMuc()
    {
        $sql = "SELECT COUNT(*) AS tong_danh_muc FROM danhmuc";
        return $this->conn->query($sql)->fetch();
    }

    // Số bình luận theo sản phẩm
    public function getBinhLuanTheoSanPham()
    {
        $sql = "SELECT s.id, s.tensp, COUNT(b.id) AS so_binh_luan
                FROM sanpham s
                LEFT JOIN binhluan b ON s.id = b.san_pham_id
                GROUP BY s.id, s.tensp";
        return $this->conn->query($sql)->fetchAll();
    }
}
