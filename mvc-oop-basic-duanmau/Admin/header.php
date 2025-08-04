<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>Admin Quản Lí</title>
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <style>
    

        .submenu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            list-style: none;
            background: orange;
            min-width: 150px;
        }

        .submenu li a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        .submenu li a:hover {
            background: #ff9933;
        }

        /* Hiển thị khi hover */
        .menu  li:hover .submenu {
            display: block;
        }
    </style>
</head>

<body>
    <div class="boxcenter">
        <header>
            <img src="../image/logo2.avif" alt="" class="logoquan">
            <ul class="">
                <li><a href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
                <li><a href="<?= BASE_URL_ADMIN . '?act=danhmuc' ?>"><i class="fas fa-th"></i> Danh mục</a></li>
                <li><a href="<?= BASE_URL_ADMIN . '?act=sanpham' ?>"><i class="fa-solid fa-burger"></i> Sản phẩm</a></li>
                <li class="">
                    <a href="<?=BASE_URL_ADMIN . '?act=listtaikhoan'?>"><i class="fa-solid fa-users"></i>   Tài khoản</a> 
                </li>
                <!-- <li><a href="<?=BASE_URL_ADMIN . '?act=formdangky'?>">đăng kí</a></li> -->
                <li><a href="<?=BASE_URL_ADMIN . '?act=listbinhluan'?>"><i class="fa-solid fa-comments"></i> Bình luận</a></li>
                <li><a href="../index.php">Thoát</a></li>
            </ul>
        </header>
    </div>