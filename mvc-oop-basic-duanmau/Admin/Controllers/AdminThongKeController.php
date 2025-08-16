<?php

class AdminThongKeController {
    private $modelThongKe;

    public function __construct() {
        $this->modelThongKe = new AdminThongKe();
    }

    public function home() {
        // Lấy dữ liệu thống kê
        $tongSanPham = $this->modelThongKe->getTongSanPham();
        $tongDanhMuc = $this->modelThongKe->getTongDanhMuc();
        $binhLuanTheoSP = $this->modelThongKe->getBinhLuanTheoSanPham();

        // Gửi sang view
        include "Views/Thongke.php";
    }
}
