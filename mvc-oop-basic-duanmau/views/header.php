
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from pixelfit.tailorfit.site/html/foodix/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2024 05:35:42 GMT -->
<head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="fast food, burger, pizza">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Foodix - Fast Foods & Restaurants HTML Template</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        <!--====== Google Fonts ======-->
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800&amp;family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon_foodix.css">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="assets/vendor/slick/slick.css">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="assets/vendor/nice-select/css/nice-select.css">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="assets/vendor/magnific-popup/dist/magnific-popup.css">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/vendor/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

<body class="home-four">
    <!--====== Start Loader Area ======-->
    <div class="fd-preloader">
        <div class="loader"></div>
    </div><!--====== End Loader Area ======-->
    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>
    <!--====== End Overlay ======-->
    <!--====== Start Sidemenu-wrapper-cart Area ======-->
    <div class="sidemenu-wrapper-cart">
        <div class="sidemenu-content">
            <div class="widget widget-shopping-cart">
                <h4>Giỏ hàng của tôi</h4>
                <div class="sidemenu-cart-close"><i class="far fa-times"></i></div>
                <div class="widget-shopping-cart-content">
                    <ul class="foodix-mini-cart-list">
                       
                    
                    <div class="cart-button">
                        <a href="<?= BASE_URL . '?act=giohang' ?>" class="theme-btn style-one mb-3">Xem Giỏ Hàng</a>
                        <a href="<?= BASE_URL . '?act=chitietdonhang' ?>" class="theme-btn style-one mb-3">Lịch Sử Đặt Hàng</a>
                        <a href="" class="theme-btn style-one">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--====== End Sidemenu-wrapper-cart Area ======-->
    <!--====== Start Header Area ======-->
    <header class="header-area header-one navigation-white transparent-header">
        <div class="container">
            <div class="header-navigation">
                <div class="nav-overlay"></div>
                <div class="primary-menu">
                    <!--=== Site Branding ===-->
                    <div class="site-branding">
                        <a href="index.php" class="brand-logo"><img src="assets/images/logo/logo-white.png" alt="Logo"></a>
                    </div>
                    <div class="nav-inner-menu">
                        <!--=== Foodix Nav Menu ===-->
                        <div class="foodix-nav-menu">
                            <!--=== Mobile Logo ===-->
                            <div class="mobile-logo mb-30 d-block d-xl-none text-center">
                                <a href="index.php" class="brand-logo"><img src="assets/images/logo/logo-main.png" alt="Site Logo"></a>
                            </div>
                            <!--=== Main Menu ===-->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="index.php">Trang chủ</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="<?= BASE_URL . '?act=trangsp'; ?>">Menu</a>

                                    </li>
                                    <li class="menu-item has-children"><a href="#">Trang</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">Về chúng tôi</a></li>
                                            <li><a href="history.html">Lịch sử của chúng tôi</a></li>
                                            <li><a href="chefs.html">Đầu bếp của chúng tôi</a></li>
                                            <li><a href="gallery.html">Phòng trưng bày</a></li>
                                            <li><a href="faq.html">Câu hỏi thường gặp</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Cửa hàng</a>
                                        <ul class="sub-menu">
                                            <li><a href="products.html">Cửa hàng của chúng tôi</a></li>
                                            <li><a href="menu-details.html">Chi tiết sản phẩm</a></li>
                                            <li><a href="cart.html">Giỏ hàng</a></li>
                                            <li><a href="checkout.html">thannh toán</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#">Tài khoản</a>
                                        <ul class="sub-menu">
                                            <?php if (!isset($_SESSION['user_client'])) { ?>
                                                <li><a href="<?= BASE_URL . '?act=login' ?>">Đăng nhập</a></li>
                                            <?php } else { ?>
                                                <li><a href="<?= BASE_URL . '?act=logout'?>" onclick="return confirm('Đăng xuất tài khoản')">Đăng xuất</a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="<?= BASE_URL . '?act=lienhe' ?>">Liên hệ</a></li>
                                </ul>
                            </nav>
                            <!--=== Nav Button ===-->
                            <div class="nav-button mt-50 d-block d-xl-none  text-center">
                                <a href="#l" class="theme-btn style-one">Đặt bàn</a>
                            </div>
                        </div>
                        <!--=== Nav Right Item ===-->
                        <div class="nav-right-item">
                            <div class="nav-button d-none d-xl-block">
                                <p class="theme-btn style-one "><?php if (isset($_SESSION['user_client'])) {
                                                                    echo $_SESSION['user_client'];
                                                                } ?></p>
                            </div>
                            <div class="cart-button" style="padding-left: 3px;">
                                <i class="far fa-shopping-cart "></i>
                            </div>

                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--====== End Header Area ======-->