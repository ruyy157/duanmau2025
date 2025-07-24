<?php

session_start();

require_once '../commons/env.php';
require_once '../commons/function.php';

require_once './Controllers/Admindanhmuccontroller.php';
require_once './Controllers/AdminSanPhamController.php';





require_once './Models/AdminDanhMuc.php';
require_once './Models/AdminSanPham.php';


$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => (new AdminDanhMucContronller())->home(),

    // Danh mục
    'danhmuc' => (new AdminDanhMucContronller())->danhSachDanhMuc(),
    'formthemdanhmuc' => (new AdminDanhMucContronller())->formAddDanhMuc(),
    'themdanhmuc' => (new AdminDanhMucContronller())->postAddDanhMuc(),
    'formsuadanhmuc' => (new AdminDanhMucContronller())->formEditDanhMuc(),
    'suadanhmuc' => (new AdminDanhMucContronller())->postEditDanhMuc(),
    'xoadanhmuc' => (new AdminDanhMucContronller())->deleteDanhMuc(),

    // Sản phẩm
    'sanpham' => (new AdminSanPhamController())->danhSachSanPham(),
    'formthemsanpham' => (new AdminSanPhamController())->formAddSanPham(),
    'themsanpham' => (new AdminSanPhamController())->postAddSanPham(),
    'formsuasanpham' => (new AdminSanPhamController())->formEditSanPham(),
    'suasanpham' => (new AdminSanPhamController())->postEditSanPham(),
    'suaalbumanhsanpham' => (new AdminSanPhamController())->postEditAnhSanPham(),
    'xoasanpham' => (new AdminSanPhamController())->deleteSanPham(),
    'chitietsanpham' => (new AdminSanPhamController())->detailSanPham(),
};
