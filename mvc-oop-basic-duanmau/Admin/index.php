<?php

session_start();

require_once '../commons/env.php';
require_once '../commons/function.php';

require_once './Controllers/Admindanhmuccontroller.php';
require_once './Controllers/AdminSanPhamController.php';
require_once './Controllers/AdminTaiKhoanController.php';
require_once './Controllers/AdminBinhLuanController.php';
require_once './Controllers/AdminThongKeController.php';


require_once './Models/AdminDanhMuc.php';
require_once './Models/AdminSanPham.php';
require_once './Models/AdminTaiKhoan.php';
require_once './Models/AdminBinhLuan.php';
require_once './Models/AdminThongKe.php';


$act = $_GET['act'] ?? '/';
if (!in_array($act, ['formdangky', 'dangkyadmin', 'loginadmin', 'checkloginadmin', 'logoutadmin'])) {
    checkLoginAdmin();
}

match ($act) {
    '/' => (new AdminThongKeController())->home(),

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


    // Đăng ký tài khoản

    'formdangky' => (new AdminTaiKhoanController())->formDangKy(),
    'dangkyadmin' => (new AdminTaiKhoanController())->postDangKy(),
    // Đăng kí đăng nhập
    'loginadmin' => (new AdminTaiKhoanController())->formLogin(),
    'checkloginadmin' => (new AdminTaiKhoanController())->login(),
    'logoutadmin' => (new AdminTaiKhoanController())->logout(),
    'listtaikhoan' => (new AdminTaiKhoanController())->listtaikhoan(),

    // Bình luận
    'listbinhluan' => (new AdminBinhLuanController())->listbinhluan(),
    'anbinhluan' => (new AdminBinhLuanController())->anBinhLuan(),
    'hienbinhluan' => (new AdminBinhLuanController())->hienBinhLuan(),
};
