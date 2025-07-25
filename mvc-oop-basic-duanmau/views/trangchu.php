  <?php require_once './views/header.php'; ?>

  <!--====== Start Hero Section ======-->
  <section class="hero-section">
      <div class="hero-wrapper-four">
          <div class="hero-bg bg_cover" style="background-image: url(assets/images/hero/hero-four_bg.png);"></div>
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-xl-6 order-2 order-xl-1">
                      <!--=== Hero Content ===-->
                      <div class="hero-content">
                          <span class="tag-line wow fadeInDown" data-wow-delay=".5s">Nóng hổi cho ngày chủ nhật hàng tuần</span>
                          <h1 class="wow fadeInUp" data-wow-delay=".6s">Thưởng thức <span>món ăn</span> của chúng tôi</h1>
                          <p class="wow fadeInDown" data-wow-delay=".7s">Thưởng thức hương vị của các món ăn ngon, được chế biến một cách chuyên nghiệp của chúng tôi được chế biến từ những nguyên liệu tốt nhất, mang đến sự hòa quyện hoàn hảo giữa các hương vị.</p>
                          <div class="hero-button wow fadeInUp" data-wow-delay=".75s">
                              <a href="index-2.html" class="theme-btn style-one">Đặt hàng ngay</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-6 order-1 order-xl-2">
                      <!--=== Hero Image ===-->
                      <div class="hero-image text-center text-xl-end">
                          <div class="shape wow bounceInUp"><span><img src="assets/images/hero/text-03.png" alt="20% OFF"></span></div>
                          <img class="hero-img wow fadeInRight" data-wow-delay=".9s" src="assets/images/hero/hero-four_img1.png" alt="Hero Image">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End Hero Section ======-->
  <!--====== Start Category Section ======-->
  <section class="category-section pt-130">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <!--=== Section Title ===-->
                  <div class="section-title mb-50 wow fadeInUp">
                      <h2>Danh mục của chúng tôi
                      </h2>
                  </div>
              </div>
              <div class="col-md-6">
                  <!--=== Category Button ===-->
                  <div class="category-button float-md-end mb-50 wow fadeInDown">
                      <a href="menu-v3.html" class="theme-btn style-two">Xem thêm</a>
                  </div>
              </div>
          </div>
          <div class="row">
              <?php foreach ($listDanhMuc as $key => $danhMuc): ?>
                  <div class="col-xl-3 col-md-6 col-sm-12">
                      <!--=== Category Item ===-->
                      <a href="" class="iconic-box style-four mb-40 wow fadeInUp">
                          <div class="icon">
                              <i class="flaticon-burger"></i> <!-- Biểu tượng danh mục -->
                          </div>
                          <div class="content">
                              <h4 class="title"><?= $danhMuc['tendanhmuc'] ?></h4> <!-- Tiêu đề danh mục -->
                              <span>Nhiều mặt hàng</span> <!-- Số lượng mặt hàng -->
                          </div>
                      </a>
                  </div>
              <?php endforeach; ?>
          </div>


  </section><!--====== End Category Section ======-->
  <!--====== Start About Section ======-->
  <section class="about-section pt-90 pb-80">
      <div class="container">
          <div class="row">
              <div class="col-xl-6">
                  <!--=== About Image Box ===-->
                  <div class="about-image-box mb-50 text-center text-xl-start wow fadeInLeft">
                      <img src="assets/images/about/about-6.png" alt="About Image">
                  </div>
              </div>
              <div class="col-xl-6">
                  <!--=== Section Content Box ===-->
                  <div class="section-content-box mb-50">
                      <!--=== Section Title ===-->
                      <div class="section-title wow fadeInDown">
                          <span class="sub-title"><i class="flaticon-food-tray"></i> Về chúng tôi</span>
                          <h2>
                              Delicia's về ẩm thực có hương vị tươi ngon</h2>
                      </div>
                      <p class="wow fadeInUp">Chúng tôi đam mê phục vụ các món ăn tươi ngon, đầy hương vị được chế biến từ những nguyên liệu tốt nhất. Mỗi bữa ăn đều được chuẩn bị chu đáo để mang lại trải nghiệm ăn uống đáng nhớ mà bạn sẽ yêu thích.
                      </p>
                      <div class="row">
                          <div class="col-sm-6">
                              <!--=== Iconic Box ===-->
                              <div class="iconic-box style-five mb-30 wow fadeInDown">
                                  <div class="icon">
                                      <img src="assets/images/icon/icon-7.svg" alt="Icon">
                                  </div>
                                  <div class="content">
                                      <h3 class="title">1500+</h3>
                                      <p>Tổng số món ăn</p>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <!--=== Iconic Box ===-->
                              <div class="iconic-box style-five mb-30 wow fadeInDown">
                                  <div class="icon">
                                      <img src="assets/images/icon/icon-8.svg" alt="Icon">
                                  </div>
                                  <div class="content">
                                      <h3 class="title">500+</h3>
                                      <p>Chi nhánh cửa hàng</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="about-button wow fadeInUp">
                          <a href="about.html" class="theme-btn style-one">Xem thêm</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End About Section ======-->
  <!--====== Start Offer Section ======-->
  <section class="offer-combo-section">
      <div class="offer-bg-wrapper bg_cover p-r z-1 pt-130 pb-80" style="background-image: url(assets/images/bg/offer-bg1.jpg);">
          <div class="shape shape-one"><span><img src="assets/images/bg/bn-img-6.png" alt=""></span></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <!--=== Section Content Box ===-->
                      <div class="section-content-box text-center text-lg-start mb-50 wow fadeInLeft">
                          <div class="section-title text-white mb-30">
                              <span class="sub-title"><i class="flaticon-food-tray"></i> Nhận giảm giá 25%
                              </span>
                              <h2>Ưu đãi Combo đặc biệt hôm nay
                              </h2>
                          </div>
                          <div class="offer-countdown">
                              <div class="simply-countdown"></div>
                          </div>
                          <a href="menu-details.html" class="theme-btn style-one">Xem thêm</a>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <!--=== Offer Image Box ===-->
                      <div class="offer-image-box text-center text-lg-end mb-50 wow fadeInRight">
                          <img src="assets/images/bg/offer-img1.png" alt="Combo Package image">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End Offer Section ======-->
  <!--====== Start Why Choose Section ======-->
  <section class="why-choose-section pt-120 pb-90">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <!--=== Section Title ===-->
                  <div class="section-title text-center mb-55 wow fadeInDown">
                      <span class="sub-title"><i class="flaticon-food-tray"></i>Tại sao chọn chúng tôi
                      </span>
                      <h2>Tại sao chúng tôi là sự lựa chọn tốt nhất của bạn
                      </h2>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-3 col-md-6 col-sm-12">
                  <!--=== Iconic Box ===-->
                  <div class="iconic-box style-six mb-40 wow fadeInDown">
                      <div class="icon">
                          <i class="flaticon-healthy-food"></i>
                      </div>
                      <div class="content">
                          <h4 class="title">Thực phẩm hợp vệ sinh
                          </h4>
                          <p>Chúng tôi đam mê phục vụ tươi ngon, đầy hương vị
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6 col-sm-12">
                  <!--=== Iconic Box ===-->
                  <div class="iconic-box style-six mb-40 wow fadeInUp">
                      <div class="icon">
                          <i class="flaticon-clean-water"></i>
                      </div>
                      <div class="content">
                          <h4 class="title">Môi trường trong lành
                          </h4>
                          <p>
                              Chúng tôi đam mê phục vụ tươi ngon, đầy hương vị</p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6 col-sm-12">
                  <!--=== Iconic Box ===-->
                  <div class="iconic-box style-six mb-40 wow fadeInDown">
                      <div class="icon">
                          <i class="flaticon-chef"></i>
                      </div>
                      <div class="content">
                          <h4 class="title">Đầu bếp lành nghề
                          </h4>
                          <p> Chúng tôi đam mê phục vụ tươi ngon, đầy hương vị</p>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6 col-sm-12">
                  <!--=== Iconic Box ===-->
                  <div class="iconic-box style-six mb-40 wow fadeInUp">
                      <div class="icon">
                          <i class="flaticon-party"></i>
                      </div>
                      <div class="content">
                          <h4 class="title">Sự kiện & Bữa tiệc</h4>
                          <p>Chúng tôi đam mê phục vụ tươi ngon, đầy hương vị</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End Why Choose Section ======-->
  <!--====== Start Booking Section ======-->
  <section class="booking-section">
      <div class="booking-wrapper bg_cover pt-130" style="background-image: url(assets/images/bg/offer-bg1.jpg);">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <!--== Section Content Box ===-->
                      <div class="section-content-box wow fadeInDown">
                          <div class="section-title text-white">
                              <span class="sub-title"><i class="flaticon-food-tray"></i>Sự đặt chỗ
                              </span>
                              <h2>
                                  Cần đặt chỗ trước?
                                  đặt bàn ngay bây giờ</h2>
                          </div>
                          <div class="booking-button">
                              <p>Đặt trực tuyến</p>
                              <a href="tel:+555-657-8876" class="theme-btn style-one"><i class="far fa-phone"></i> +555-657-8876</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <!--== Booking Form Box ===-->
                      <div class="booking-form-box wow fadeInUp">
                          <div class="booking-title text-center mb-30">
                              <h3>Tạo một bảng đặt chỗ
                              </h3>
                          </div>
                          <form class="booking-form-two">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form_group">
                                          <input type="text" class="form_control" placeholder="Enter your name" name="name" required>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form_group">
                                          <input type="email" class="form_control" placeholder="Enter your Email" name="name" required>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form_group">
                                          <input type="text" class="form_control" placeholder="Enter your Phone" name="phone" required>
                                          <span class="icon"><i class="far fa-phone"></i></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form_group">
                                          <input type="text" class="form_control" placeholder="Date" id="datepicker">
                                          <span class="icon"><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="form_group">
                                          <select class="wide">
                                              <option value="01">01 người</option>
                                              <option value="02">02 người</option>
                                              <option value="03">03 người</option>
                                              <option value="04">04 người</option>
                                              <option value="05">05 người</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="form_group text-center">
                                          <button class="theme-btn style-one">Đặt 1 bàn</button>
                                      </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End Booking Section ======-->
  <!--===== Start Menu Section ======-->
  <section class="menu-section pt-120 pb-100">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <!--== Section Title ===-->
                  <div class="section-title text-center mb-55 wow fadeInDown">
                      <span class="sub-title"><i class="flaticon-food-tray"></i>Thực đơn ngon
                      </span>
                      <h2>Khám phá món ngon của chúng tôi
                          <br> Menu
                      </h2>
                  </div>
              </div>
          </div>
          <div class="row">
            <?php foreach ($listSanPham as $key => $sanPham): ?>
                <div class="col-lg-6" >
                    <!--== Menu Item ===-->
                    <div class="menu-item style-eight mb-30 wow fadeInUp">
                        <div class="menu-thumbmail">
                            <a href="<?= BASE_URL . '?act=chitietsanpham&id_san_pham=' . $sanPham['id']; ?>"><img
                                    src="<?= BASE_URL . $sanPham['hinhanh'] ?>" alt="Menu Thumbnail"
                                    style="width: 70px; height: 70px;"></a>
                        </div>
                        <div class="menu-content-wrap">
                            <div class="content">
                                <h4 class="title"><a
                                        href="<?= BASE_URL . '?act=chitietsanpham&id_san_pham=' . $sanPham['id']; ?>"><?= $sanPham['tensp'] ?></a>
                                </h4>
                                <p style="height: 100px;">
                                    <?= $sanPham['mota'] ?>
                                </p>
                            </div>
                            <div class="price-box">
                                <p class="price"><?=($sanPham['giasp'])  ?>K</p>
                                <p class="text-warning">Giảm còn</p>
                                <p class="price"><?=($sanPham['giakm'])  ?>K</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        
        </div>
      </div>
  </section><!--===== Ens Menu Section ======-->
  <!--===== Start Gallery Section ======-->
  <section class="gallery-section">
      <!--== Gallery Slider One ===-->
      <div class="gallery-slider-one">
          <!--== Gallery Item ===-->
          <div class="gallery-item style-two">
              <div class="gallery-img">
                  <img src="assets/images/gallery/gallery-14.jpg" alt="gallery img">
                  <div class="hover-content">
                      <div class="gallery-content">
                          <h4 class="title"><a href="menu-details.html">Hawaiian pizza</a></h4>
                          <span>Pizza</span>
                      </div>
                  </div>
              </div>
          </div>
          <!--== Gallery Item ===-->
          <div class="gallery-item style-two">
              <div class="gallery-img">
                  <img src="assets/images/gallery/gallery-15.jpg" alt="gallery img">
                  <div class="hover-content">
                      <div class="gallery-content">
                          <h4 class="title"><a href="menu-details.html">Hawaiian pizza</a></h4>
                          <span>Pizza</span>
                      </div>
                  </div>
              </div>
          </div>
          <!--== Gallery Item ===-->
          <div class="gallery-item style-two">
              <div class="gallery-img">
                  <img src="assets/images/gallery/gallery-16.jpg" alt="gallery img">
                  <div class="hover-content">
                      <div class="gallery-content">
                          <h4 class="title"><a href="menu-details.html">Hawaiian pizza</a></h4>
                          <span>Pizza</span>
                      </div>
                  </div>
              </div>
          </div>
          <!--== Gallery Item ===-->
          <div class="gallery-item style-two">
              <div class="gallery-img">
                  <img src="assets/images/gallery/gallery-17.jpg" alt="gallery img">
                  <div class="hover-content">
                      <div class="gallery-content">
                          <h4 class="title"><a href="menu-details.html">Hawaiian pizza</a></h4>
                          <span>Pizza</span>
                      </div>
                  </div>
              </div>
          </div>
          <!--== Gallery Item ===-->
          <div class="gallery-item style-two">
              <div class="gallery-img">
                  <img src="assets/images/gallery/gallery-18.jpg" alt="gallery img">
                  <div class="hover-content">
                      <div class="gallery-content">
                          <h4 class="title"><a href="menu-details.html">Hawaiian pizza</a></h4>
                          <span>Pizza</span>
                      </div>
                  </div>
              </div>
          </div>
          <!--== Gallery Item ===-->
          <div class="gallery-item style-two">
              <div class="gallery-img">
                  <img src="assets/images/gallery/gallery-15.jpg" alt="gallery img">
                  <div class="hover-content">
                      <div class="gallery-content">
                          <h4 class="title"><a href="menu-details.html">Hawaiian pizza</a></h4>
                          <span>Pizza</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--===== End Gallery Section ======-->
  <!--===== Start Team Section ======-->
  <section class="team-section pt-120 pb-90">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <!--== Section Title ===-->
                  <div class="section-title text-center mb-60 wow fadeInDown">
                      <span class="sub-title"><i class="flaticon-food-tray"></i>Đầu bếp đặc biệt của chúng tôi
                      </span>
                      <h2>Giới thiệu các bậc thầy ẩm thực của chúng tôi
                      </h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <!--== Team Item ===-->
                  <div class="team-item style-three mb-40 wow fadeInUp">
                      <div class="member-image">
                          <img src="assets/images/team/team-14.jpg" alt="Member Image">
                          <div class="hover-content">
                              <div class="social-box">
                                  <ul class="social-link">
                                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                  </ul>
                              </div>
                              <div class="member-info">
                                  <h4 class="title">David Liam</h4>
                                  <span class="position">CEO</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <!--== Team Item ===-->
                  <div class="team-item style-three mb-40 wow fadeInUp">
                      <div class="member-image">
                          <img src="assets/images/team/team-15.jpg" alt="Member Image">
                          <div class="hover-content">
                              <div class="social-box">
                                  <ul class="social-link">
                                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                  </ul>
                              </div>
                              <div class="member-info">
                                  <h4 class="title">Alex Mika</h4>
                                  <span class="position">Excutive Chef</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <!--== Team Item ===-->
                  <div class="team-item style-three mb-40 wow fadeInUp">
                      <div class="member-image">
                          <img src="assets/images/team/team-16.jpg" alt="Member Image">
                          <div class="hover-content">
                              <div class="social-box">
                                  <ul class="social-link">
                                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                      <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                  </ul>
                              </div>
                              <div class="member-info">
                                  <h4 class="title">John Smith</h4>
                                  <span class="position">Excutive Chef</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--===== End Team Section ======-->
  <!--===== Start Testimonial Section ======-->
  <section class="testimonial-section">
      <!--=== Testimonial Wrapper ===-->
      <div class="testimonial-wrapper-bgc gray-bg pt-120 pb-130">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <!--=== Section Title ===-->
                      <div class="section-title text-center mb-50 wow fadeInDown">
                          <span class="sub-title"><i class="flaticon-food-tray"></i>Giấy chứng nhận</span>
                          <h2>Our Guests Are Saying</h2>
                      </div>
                  </div>
              </div>
              <!--=== Testimonial Slider Two ===-->
              <div class="testimonial-slider-two wow fadeInUp">
                  <!--=== Testimonial Item ===-->
                  <div class="testimonial-item style-three mb-60">
                      <div class="testimonial-content">
                          <ul class="ratings">
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                          </ul>
                          <p>Từ lúc bước vào, chúng tôi đã bị ấn tượng bởi bầu không khí ấm áp và hấp dẫn. Thức ăn rất đặc biệt - mỗi món đều có hương vị tươi ngon, sống động. Các nhân viên chu đáo và hiểu biết, tạo nên trải nghiệm ăn uống của chúng tôi.
                          </p>
                          <div class="author-quote-item d-flex">
                              <div class="author-thumb-item d-flex">
                                  <div class="author-thumb">
                                      <img src="assets/images/testimonial/author-1.jpg" alt="author image">
                                  </div>
                                  <div class="author-info">
                                      <h5>David Liam</h5>
                                      <span>CEO</span>
                                  </div>
                              </div>
                              <div class="quote">
                                  <i class="far fa-quote-right"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--=== Testimonial Item ===-->
                  <div class="testimonial-item style-three mb-60">
                      <div class="testimonial-content">
                          <ul class="ratings">
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                          </ul>
                          <p>Từ lúc bước vào, chúng tôi đã bị ấn tượng bởi bầu không khí ấm áp và hấp dẫn. Thức ăn rất đặc biệt - mỗi món đều có hương vị tươi ngon, sống động. Các nhân viên chu đáo và hiểu biết, tạo nên trải nghiệm ăn uống của chúng tôi.
                          </p>
                          <div class="author-quote-item d-flex">
                              <div class="author-thumb-item d-flex">
                                  <div class="author-thumb">
                                      <img src="assets/images/testimonial/author-2.jpg" alt="author image">
                                  </div>
                                  <div class="author-info">
                                      <h5>Alex Mika</h5>
                                      <span>CEO</span>
                                  </div>
                              </div>
                              <div class="quote">
                                  <i class="far fa-quote-right"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!--=== Testimonial Item ===-->
                  <div class="testimonial-item style-three mb-60">
                      <div class="testimonial-content">
                          <ul class="ratings">
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                              <li><i class="fas fa-star"></i></li>
                          </ul>
                          <p>Từ lúc bước vào, chúng tôi đã bị ấn tượng bởi bầu không khí ấm áp và hấp dẫn. Thức ăn rất đặc biệt - mỗi món đều có hương vị tươi ngon, sống động. Các nhân viên chu đáo và hiểu biết, tạo nên trải nghiệm ăn uống của chúng tôi.
                          </p>
                          <div class="author-quote-item d-flex">
                              <div class="author-thumb-item d-flex">
                                  <div class="author-thumb">
                                      <img src="assets/images/testimonial/author-3.jpg" alt="author image">
                                  </div>
                                  <div class="author-info">
                                      <h5>David Liam</h5>
                                      <span>CEO</span>
                                  </div>
                              </div>
                              <div class="quote">
                                  <i class="far fa-quote-right"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--===== End Testimonial Section ======-->
  <!--====== Start Blog Section ======-->
  <section class="blog-section pt-130 pb-100">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <!--=== Section Title ===-->
                  <div class="section-title text-center mb-55 wow fadeInDown">
                      <span class="sub-title"><i class="flaticon-food-tray"></i>
                          Blog mới nhất của chúng tôi</span>
                      <h2>Khám phá các bài đăng trên blog mới nhất của chúng tôi</h2>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <!--=== Blog Post Item ===-->
                  <div class="blog-post-item style-three mb-40 wow fadeInUp">
                      <div class="post-thumbnail">
                          <img src="assets/images/blog/blog-17.jpg" alt="Post Thumbnail">
                      </div>
                      <div class="post-content">
                          <div class="post-meta">
                              <span><i class="far fa-user-alt"></i><a href="#">By David</a></span>
                              <span><i class="far fa-comment"></i><a href="#">Bình luận (2)</a></span>
                          </div>
                          <h4 class="title"><a href="blog-details.html">
                                  Mặt bếp chiên giòn màu đỏ
                                  Thực phẩm khoai tây</a></h4>
                          <p>Khoai tây đỏ chiên giòn, được tẩm gia vị hoàn hảo, vàng và thơm ngon.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <!--=== Blog Post Item ===-->
                  <div class="blog-post-item style-three mb-40 wow fadeInUp">
                      <div class="post-thumbnail">
                          <img src="assets/images/blog/blog-18.jpg" alt="Post Thumbnail">
                      </div>
                      <div class="post-content">
                          <div class="post-meta">
                              <span><i class="far fa-user-alt"></i><a href="#">By David</a></span>
                              <span><i class="far fa-comment"></i><a href="#">Comment (2)</a></span>
                          </div>
                          <h4 class="title"><a href="blog-details.html">
                                  Cách làm món jimmy luộc mềm
                                  trứng ở nhà</a></h4>
                          <p>Làm món trứng luộc Jimmy tại nhà với lòng trắng mềm và lòng đỏ kem.
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                  <!--=== Blog Post Item ===-->
                  <div class="blog-post-item style-three mb-40 wow fadeInUp">
                      <div class="post-thumbnail">
                          <img src="assets/images/blog/blog-19.jpg" alt="Post Thumbnail">
                      </div>
                      <div class="post-content">
                          <div class="post-meta">
                              <span><i class="far fa-user-alt"></i><a href="#">By David</a></span>
                              <span><i class="far fa-comment"></i><a href="#">Comment (2)</a></span>
                          </div>
                          <h4 class="title"><a href="blog-details.html">Bánh quy mềm truyền thống với
                                  phô mai bia ngọt</a></h4>
                          <p>Bánh quy mềm truyền thống ấm áp ăn kèm với phô mai bia ngọt ngào, béo ngậy.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section><!--====== End Blog Section ======-->#
  <?php require_once './views/footer.php'; ?>