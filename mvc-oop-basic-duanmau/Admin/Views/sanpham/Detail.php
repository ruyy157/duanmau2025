<?php include "./header.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .product-container {
            display: flex;
            max-width: 1000px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
            gap: 30px;
        }

        .product-image img {
            max-width: 400px;
            border-radius: 8px;
        }

        .product-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* Giúp đẩy nút xuống dưới */
        }

        .product-title {
            font-size: 28px;
            margin-bottom: 10px;
            color: #333;
        }

        .product-price {
            color: #e63946;
            font-size: 24px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .product-desc {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .quantity {
            margin-bottom: 30px;
        }

        .quantity input {
            width: 60px;
            padding: 5px;
            font-size: 16px;
        }

        .btn-group {
            margin-top: auto;
            /* Đẩy nhóm nút xuống dưới */
        }

        .btn-buy,
        .btn-buy-now {
            display: inline-block;
            padding: 12px 20px;
            margin-right: 10px;
            border: none
        }
    </style>
</head>

<body>
    <div class="boxcenter">
        <div class="form-control">
            <H1> Chi tiết sản phẩm</H1>
        </div>
        <div class="product-container">
            <div class="product-image">
                <img src="<?= BASE_URL . $sanPham['hinhanh'] ?>" alt="Tên sản phẩm" style="height: 350px; width: 350px;">
            </div>
            <div class="product-info">
                <h1 class="product-title">Tên sản phẩm : <?= $sanPham['tensp'] ?></h1>
                <p class="product-price">Giá : <?= $sanPham['giasp'] ?></p>
                <p class="product-desc">
                    Mô tả :<?= $sanPham['mota'] ?>
                </p>
                <div class="quantity">
                    Số lượng : <label for="qty"><?= $sanPham['soluong'] ?></label>
                </div>
                 <p class="product-desc">
                    Danh mục : <?= $sanPham['danh_muc_id'] ?>
                </p>
                <button class="btn-buy btn btn-danger"><i class="fa-solid fa-reply-all"></i> <a href="<?= BASE_URL_ADMIN . '?act=sanpham' ?>">Quay lại</a> </button>
                <button class="btn-buy-now btn btn-warning"><i class="fa-solid fa-hammer"></i> <a href="<?= BASE_URL_ADMIN . '?act=formsuasanpham&idsanpham=' . $sanPham['id'] ?>">Sửa</a> </button>
            </div>
        </div>
</body>

</html>