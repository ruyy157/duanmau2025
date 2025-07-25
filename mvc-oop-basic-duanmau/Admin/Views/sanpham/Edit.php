<?php include "./header.php" ?>

<div class="boxcenter">
  <div class="form-control">
    <H1>Cập nhật sản phẩm</H1>
  </div>
  <div class="boxcenter">
    <form action="<?= BASE_URL_ADMIN . '?act=suasanpham' ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="san_pham_id" value="<?= $sanPham['id'] ?>">

      <div class="row mb10">
        Danh mục<br>
        <select id="inputStatus" name="danh_muc_id" class="form-control custom-select">
          <?php foreach ($listDanhMuc as $danhMuc): ?>
            <option <?= $danhMuc['id'] == $sanPham['danh_muc_id'] ? 'selected' : '' ?>
              value="<?= $danhMuc['id']; ?>">
              <?= $danhMuc['tendanhmuc'] ?>
            </option>
          <?php endforeach ?>
        </select>
        <?php if (!empty($_SESSION['error']['danh_muc_id'])): ?>
          <small style="color:red;"><?= $_SESSION['error']['danh_muc_id'] ?></small>
        <?php endif; ?>
      </div>

      <div class="row mb10">
        Tên sản phẩm<br>
        <input type="text" id="tensp" name="tensp" value="<?= $sanPham['tensp'] ?>" class="form-control">
        <?php if (!empty($_SESSION['error']['tensp'])): ?>
          <small style="color:red;"><?= $_SESSION['error']['tensp'] ?></small>
        <?php endif; ?>
      </div>

      <div class="row mb10">
        Giá<br>
        <input type="text" id="giasp" name="giasp" value="<?= $sanPham['giasp'] ?>" class="form-control">
        <?php if (!empty($_SESSION['error']['giasp'])): ?>
          <small style="color:red;"><?= $_SESSION['error']['giasp'] ?></small>
        <?php endif; ?>
      </div>
      <div class="row mb10">
        Giá<br>
        <input type="text" id="giakm" name="giakm" value="<?= $sanPham['giakm'] ?>" class="form-control">
       
      </div>
      <div class="row mb10">
        Hình<br>
        <div class="form-group">
          <input type="file" id="hinhanh" name="hinhanh" class="form-control">
        </div>
        <?php if (!empty($sanPham['hinhanh'])): ?>
          <img src="<?= $sanPham['hinhanh'] ?>" alt="Ảnh sản phẩm" width="120"
            style="margin-top:10px; border:1px solid #ddd; border-radius:5px;">
        <?php endif; ?>
      </div>

      <div class="row mb10">
        Số lượng<br>
        <input type="number" id="soluong" name="soluong" value="<?= $sanPham['soluong'] ?>" class="form-control">
        <?php if (!empty($_SESSION['error']['soluong'])): ?>
          <small style="color:red;"><?= $_SESSION['error']['soluong'] ?></small>
        <?php endif; ?>
      </div>

      <div class="row mb10">
        Mô tả<br>
        <textarea name="mota" id="mota" cols="30" rows="10" class="form-control"><?= $sanPham['mota'] ?></textarea>
      </div>

      <div class="row mb10">
        <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary mt-2" style="width: 50%; height: 40px;">
        <input type="reset" value="Nhập lại" class="btn btn-danger mt-2" style="width: 50%; height: 40px;">
        <a href="<?= BASE_URL_ADMIN . '?act=sanpham' ?>">
          <input type="button" value="Danh sách" class="btn btn-success mt-2">
        </a>
      </div>
    </form>
    <?php unset($_SESSION['error']); ?>
  </div>
</div>