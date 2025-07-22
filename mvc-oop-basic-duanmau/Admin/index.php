<?php

session_start();

require_once '../commons/env.php';
require_once '../commons/function.php';

require_once './Controllers/Admindanhmuccontroller.php';





require_once './Models/AdminDanhMuc.php';


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
};
