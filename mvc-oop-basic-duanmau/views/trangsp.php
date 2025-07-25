<?php require_once './views/header.php'; ?>
<!--====== Start Page Section ======-->
<section class="page-banner">
    <div class="page-bg-wrapper p-r z-1 bg_cover pt-100 pb-110" style="background-image: url(assets/images/bg/page-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=== Page Banner Content ===-->
                    <div class="page-banner-content text-center">
                        <h1 class="page-title">Sản phẩm của chúng tôi</h1>
                        <ul class="breadcrumb-link">
                            <li><a href="index-2.html">Trang chủ</a></li>
                            <li class="active">Sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Page Section ======-->
<!--====== Start Menu Page Section ======-->
<section class="menu-grid-section gray-bg pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="text-box text-center text-md-start mb-30 wow fadeInLeft">
                    <p>
                        Hiển thị 1 - 12 trên 30 kết quả</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="filter-category mb-30 float-md-end wow fadeInRight">
                    <select class="wide">
                        <option data-display="Sắp xếp theo độ mới">Sắp xếp theo độ mới</option>
                        <option value="01">Giá cao đến thấp
                        </option>
                        <option value="02">Giá thấp đến cao
                        </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($listSanPham as $key => $sanPham): ?>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="menu-item style-four mb-30 wow fadeInUp">
                        <div class="menu-thumbnail">
                            <a href="<?= BASE_URL . '?act=chitietsanpham&id_san_pham=' . $sanPham['id']; ?>">
                                <img src="<?= BASE_URL . $sanPham['hinhanh'] ?>" alt="Image" style="width: 100%; height: 350px;">
                            </a>
                            <div class="wishlist-btn">
                                <button><i class="far fa-heart"></i></button>
                            </div>
                        </div>
                        <div class="menu-info">
                            <div class="menu-meta">
                                <span class="price"><span class="currency"></span><?=($sanPham['giakm'])   ?> K</span>
                                <span class="rating"><i class="fas fa-star"></i><a href="#">Số lượng còn: <?= $sanPham['soluong'] ?></a></span>
                            </div>
                            <h4 class="title"><a href="<?= BASE_URL . '?act=chitietsanpham&id_san_pham=' . $sanPham['id']; ?>"><?= $sanPham['tensp'] ?></a></h4>
                            <ul class="check-list style-one" style="height: 100px;">
                                <li><i class="far fa-check-circle"></i><?= $sanPham['mota'] ?></li>
                            </ul>
                            <a href="<?= BASE_URL . '?act=chitietsanpham&id_san_pham=' . $sanPham['id'];?>" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Thêm giỏ hàng</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <!-- <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="menu-item style-four mb-30 wow fadeInUp">
                            <div class="menu-thumbnail">
                                <img src="assets/images/product/product-1.jpg" alt="Image">
                                <div class="wishlist-btn">
                                    <button><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="menu-info">
                                <div class="menu-meta">
                                    <span class="price"><span class="currency">$</span>18.00</span>
                                    <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                </div>
                                <h4 class="title"><a href="menu-details.html">Beefy Bourbon Bliss</a></h4>
                                <ul class="check-list style-one">
                                    <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                    <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                </ul>
                                <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Thêm giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="menu-item style-four mb-30 wow fadeInUp">
                            <div class="menu-thumbnail">
                                <img src="assets/images/product/product-2.jpg" alt="Image">
                                <div class="wishlist-btn">
                                    <button><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="menu-info">
                                <div class="menu-meta">
                                    <span class="price"><span class="currency">$</span>32.17</span>
                                    <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                </div>
                                <h4 class="title"><a href="menu-details.html">Smoked Paprika Sirloin</a></h4>
                                <ul class="check-list style-one">
                                    <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                    <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                </ul>
                                <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="menu-item style-four mb-30 wow fadeInUp">
                            <div class="menu-thumbnail">
                                <img src="assets/images/product/product-3.jpg" alt="Image">
                                <div class="wishlist-btn">
                                    <button><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="menu-info">
                                <div class="menu-meta">
                                    <span class="price"><span class="currency">$</span>39.21</span>
                                    <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                </div>
                                <h4 class="title"><a href="menu-details.html">Thai Basil Beef Stir-Fry</a></h4>
                                <ul class="check-list style-one">
                                    <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                    <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                </ul>
                                <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="menu-item style-four mb-30 wow fadeInUp">
                            <div class="menu-thumbnail">
                                <img src="assets/images/product/product-4.jpg" alt="Image">
                                <div class="wishlist-btn">
                                    <button><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="menu-info">
                                <div class="menu-meta">
                                    <span class="price"><span class="currency">$</span>39.21</span>
                                    <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                </div>
                                <h4 class="title"><a href="menu-details.html">Korean BBQ Beef</a></h4>
                                <ul class="check-list style-one">
                                    <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                    <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                </ul>
                                <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="menu-item style-four mb-30 wow fadeInUp">
                            <div class="menu-thumbnail">
                                <img src="assets/images/product/product-5.jpg" alt="Image">
                                <div class="wishlist-btn">
                                    <button><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="menu-info">
                                <div class="menu-meta">
                                    <span class="price"><span class="currency">$</span>18.00</span>
                                    <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                </div>
                                <h4 class="title"><a href="menu-details.html">Beef Bourguignon</a></h4>
                                <ul class="check-list style-one">
                                    <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                    <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                </ul>
                                <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="menu-item style-four mb-30 wow fadeInUp">
                            <div class="menu-thumbnail">
                                <img src="assets/images/product/product-6.jpg" alt="Image">
                                <div class="wishlist-btn">
                                    <button><i class="far fa-heart"></i></button>
                                </div>
                            </div>
                            <div class="menu-info">
                                <div class="menu-meta">
                                    <span class="price"><span class="currency">$</span>33.21</span>
                                    <span class="rating"><i class="fas fa-star"></i><a href="#">4.7(375)</a></span>
                                </div>
                                <h4 class="title"><a href="menu-details.html">Beef Wellington</a></h4>
                                <ul class="check-list style-one">
                                    <li><i class="far fa-check-circle"></i>4 Piece Chicken</li>
                                    <li><i class="far fa-check-circle"></i>Spicy Sauce</li>
                                </ul>
                                <a href="menu-details.html" class="theme-btn style-two"><i class="far fa-cart-plus"></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div> -->
        <div class="row">
            <div class="col-lg-12">
                <!--=== Foodix Pagination ===-->
                <ul class="foodix-pagination d-flex justify-content-center mt-20 wow fadeInDown">
                    <li><a href="blog-grid.html"><i class="far fa-arrow-left"></i></a></li>
                    <li><a href="blog-grid.html">01</a></li>
                    <li><a href="blog-grid.html">02</a></li>
                    <li><a href="blog-grid.html">03</a></li>
                    <li><a href="blog-grid.html"><i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section><!--====== End Menu Page Section ======-->
<?php require_once './views/footer.php'; ?>