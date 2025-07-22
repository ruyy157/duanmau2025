<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin Quản Lí</title>
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="boxcenter">
      <header>
        <img src="../image/logo2.avif" alt="" class="logoquan">
        <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="<?= BASE_URL_ADMIN . '?act=danhmuc'?>">Danh mục</a></li>
                <li><a href="index.php?act=listsp">Sản phẩm</a></li>
                <li><a href="index.php?act=dskh">Khách hàng</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
                <li><a href="index.php?act=bill">Đơn hàng</a></li>
                <li><a href="../index.php">Thoát</a></li>
        </ul>
      </header> 
        </div>