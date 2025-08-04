<?php require_once './views/header.php'; ?>


<!--====== Start Page Section ======-->
<section class="page-banner">
    <div class="page-bg-wrapper p-r z-1 bg_cover pt-100 pb-110" style="background-image: url(assets/images/bg/page-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Page Banner Content ===-->
                    <div class="page-banner-content text-center">
                        <h1 class="page-title">Chi tiết sản phẩm</h1>
                        <ul class="breadcrumb-link">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Section ======-->
<!--====== Start Menu Section ======-->
<section class="menu-details-section pt-130 pb-65">
    <div class="container">
        <!--=== Menu Details Wrapper ===-->
        <div class="menu-details-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!--=== Menu Image ===-->

                    <div class="menu-image mb-50 wow fadeInLeft">
                        <img src="<?= BASE_URL . $sanPham['hinhanh'] ?>">
                    </div>

                </div>
                <div class="col-lg-6">
                    <!--=== Menu Info ===-->
                    <div class="menu-info-content mb-50 wow fadeInRight">
                        <h4 class="title"><?= $sanPham['tensp'] ?></h4>


                        <span class="price"><span class="currency"></span><?= ($sanPham['giakm']) ?> K<span class="pre-price">
                                <span class="currency"></span><?= ($sanPham['giasp'])  ?> K</span></span>
                        <form action="<?= BASE_URL . '?act=themgiohang' ?>" method="post">
                            <p> Số lượng còn : <?= $sanPham['soluong'] ?></p>


                            <div class="product-cart-variation">
                                <ul>
                                    <li>
                                        <div class="quantity-input">
                                            <p class="quantity-down"><i class="far fa-minus"></i></p>
                                            <input type="hidden" name="san_pham_id" id="" value="<?= $sanPham['id'] ?>">
                                            <input class="quantity" type="text" value="1" name="soluong">
                                            <p class="quantity-up"><i class="far fa-plus"></i></p>
                                        </div>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                            <div class="add-to-cart">
                                <button type="submit" class="theme-btn style-one">Mua</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <!--=== Description Content Wrapper ===-->
                    <div class="description-content-wrapper mb-30 wow fadeInDown">
                        <!--=== Foodix Tabs ===-->
                        <div class="foodix-tabs style-three mb-20">
                            <ul class="nav nav-tabs wow fadeInDown">
                                <li>
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#cat1">Mô tả</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat2">Album</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat3">Bình luận </a></button>

                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <!--=== Tab Pane ===-->
                            <div class="tab-pane fade show active" id="cat1">
                                <div class="row img-hover-rotate">
                                    <p><?= $sanPham['mota'] ?></p>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="cat2">
                                <div class="content-box">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="cat3">
                                <?php foreach ($listBinhLuan as $binhLuan) : ?>
                                    <div class="content-box mb-3">
                                        <div class="row align-items-start">
                                            <div class="col-4 text-center">
                                                <img src="" alt=""
                                                    style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover;">
                                                <center>
                                                    <p><b><?= $binhLuan['hoten'] ?></p></b>
                                                </center>
                                            </div>

                                            <div class="col-8">
                                                <div class="form-control" style="border: none; background-color: #f8f9fa;"> <!-- Đặt background màu sáng -->
                                                    <p><b>Ngày đăng:</b> <?= $binhLuan['ngaydang'] ?></p>
                                                    <h4><?= $binhLuan['noidung'] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <?php if (isset($_SESSION['user_client'])) : ?>
                                    <form action="<?= BASE_URL . '?act=binhluan&id_san_pham=' . $sanPham['id'] ?>" method="post">
                                        <input type="hidden" name="id_san_pham" value="<?= $sanPham['id'] ?>">
                                        <input type="hidden" name="ngaydang" value="<?= date('Y-m-d H:i:s') ?>">

                                        <div class="col mt-10">
                                            <h3 class="text-danger mb-3">Nội dung bình luận</h3>
                                            <textarea name="noidung" class="form-control mb-3" id="noidung" required></textarea>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary ">Gửi bình luận</button>
                                        </div>
                                    </form>
                                <?php else : ?>
                                    <div class="alert alert-warning mt-3">
                                        <strong>Bạn cần <a href="<?= BASE_URL . '?act=login' ?>" class="btn btn-primary">đăng nhập</a> để bình luận.</strong>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="foodix-banner-wrapper">
                        <!--=== Foodix Banner ===-->
                        <div class="foodix-banner-item style-three mb-30 wow fadeInUp">
                            <div class="banner-inner-wrap bg_cover" style="background-image: url(assets/images/bg/banner-bg-3.jpg);">
                                <div class="banner-img"><img src="assets/images/bg/bn-img-1.png" alt="banner image"></div>
                                <div class="banner-content">
                                    <span>Xiên cao cấp</span>
                                    <h3>Xiên gà</h3>
                                    <p>Thưởng thức hương vị hấp dẫn của xiên gà nướng được tẩm ướp chuyên nghiệp của chúng tôi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--=== Foodix Banner ===-->
                        <div class="foodix-banner-item style-three mb-30 wow fadeInUp">
                            <div class="banner-inner-wrap bg_cover" style="background-image: url(assets/images/bg/banner-bg-4.jpg);">
                                <div class="banner-img"><img src="assets/images/bg/bn-img-2.png" alt="banner image"></div>
                                <div class="banner-content">
                                    <span>Gói cao cấp</span>
                                    <h3>Bọc gà</h3>
                                    <p>Thưởng thức món gà cuộn thơm ngon của chúng tôi, sự kết hợp thú vị giữa thịt gà nướng mềm
                                        .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Releted Item WRapper ===-->
            <div class="releted-item-wrap pt-45">
                <!--=== Releted Title ===-->
                <h3 class="releted-title mb-30 wow fadeInDown">Sản phẩm cùng loại</h3>
                <div class="row justify-content-center">
                    <?php foreach ($listSanPhamCungDanhMuc as $key => $sanPham) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <!--=== Menu Item ===-->
                            <div class="menu-item related-menu-item text-center mb-30 wow fadeInUp">
                                <div class="menu-image">
                                    <a href="<?= BASE_URL . '?act=chitietsanpham&id_san_pham=' . $sanPham['id']; ?>">
                                        <img src="<?= BASE_URL . $sanPham['hinhanh'] ?>" alt="Image">
                                    </a>
                                </div>
                                <div class="menu-info">
                                    <h4 class="title"><a href="<?= BASE_URL . '?act=chitietsanpham&id_san_pham=' . $sanPham['id']; ?>"><?= $sanPham['tensp'] ?></a></h4>
                                    <p><?= $sanPham['mota'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section><!--====== End Menu Section ======-->
<?php require_once './views/footer.php'; ?>