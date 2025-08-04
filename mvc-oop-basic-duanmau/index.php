<?php
session_start();
// Require toàn bộ các file khai báo môi trường, thực thi,...(không require view)

// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php'; // Trang chủ

// Require toàn bộ file Models
require_once './models/DanhMucModel.php';
require_once './models/ProductModel.php';
require_once './models/TaiKhoanModel.php'; // Model quản lý tài khoản
require_once './models/BinhLuanModel.php'; // Model quản lý tài khoản

// Route
$act = $_GET['act'] ?? '/';


// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/' => (new HomeController())->Home(),
    'chitietsanpham' => (new HomeController())->DetailSanPham(),
    'trangsp' => (new HomeController())->trangSanPham(), // Trang sản phẩm

    // Đăng ký và đăng nhập
    'formdangky' => (new HomeController())->formDangKy(),
    'dangky' => (new HomeController())->postDangKy(),

    'login' => (new HomeController())->formLogin(),
    'checklogin' => (new HomeController())->postLogin(),
    'logout' => (new HomeController())->logoutClient(),
    'binhluan' => (new HomeController())->postAddBinhLuan(),
};
