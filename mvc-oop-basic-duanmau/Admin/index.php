<?php
session_start();
require_once '../commons/env.php';
require_once '../commons/function.php';

require_once 'Model/AdminDanhmuc.php';
require_once 'Model/Adminsanpham.php';




require_once 'Controller/Admindanhmuccontroller.php';
require_once 'Controller/Adminsanphamcontroller.php';

// Xử lý routing
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => (new Admindanhmuccontroller())->home(),

    //danh mục
    'danhmuc' => (new Admindanhmuccontroller())->danhSachDanhMuc(),
    'formthemdanhmuc' => (new Admindanhmuccontroller())->formAddDanhMuc(),
    'themdanhmuc' => (new Admindanhmuccontroller())->postAddDanhMuc(),
    'formsuadanhmuc' => (new Admindanhmuccontroller())->formEditDanhMuc(),
    'suadanhmuc' => (new Admindanhmuccontroller())->postEditDanhMuc(),
    'xoadanhmuc' => (new Admindanhmuccontroller())->deleteDanhMuc(),
};