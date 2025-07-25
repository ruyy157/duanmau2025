<?php include "./header.php" ?>

<div class="boxcenter">
  <div class="form-control">
    <H1> Thêm mới đồ ăn</H1>
  </div>
  <div class="boxcenter">
    <form action="<?= BASE_URL_ADMIN . '?act=themsanpham' ?>" method="post" enctype="multipart/form-data">
    <div class="row mb10">
        Tên danh mục
                   <select class="form-control" name="danh_muc_id" id="exampleFormControlSelect1">
                                    <option selected disabled>Chọn danh mục</option>
                                    <?php foreach ($listDanhMuc as $danhMuc): ?>
                                        <option value="<?= $danhMuc['id'] ?>"><?= $danhMuc['tendanhmuc'] ?></option>
                                    <?php endforeach ?>
                                </select>
      </div>
    
    <div class="row mb10">
        Tên đồ ăn<br>
        <input type="text" name="tensp" class="form-control">
      </div>
      <div class="row mb10"> 
        Giá<br>
        <input type="text" name="giasp" class="form-control">
      </div>
      <div class="row mb10"> 
        Giá khuyến mãi<br>
        <input type="text" name="giakm" class="form-control">
      </div>
      <div class="row mb10">
        Hình<br>
        <input type="file" name="hinhanh" id=""class="form-control">
      </div>
      <div class="row mb10">
        Số lượng <br>
        <input type="number" name="soluong" id=""class="form-control">
      </div>
      <div class="row mb10">
        Mô tả<br>
        <textarea name="mota" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <span class="text-success">      
      </span>
      

      <div class="row mb-5">
        <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary mt-2 " style="width: 50%; height: 40px;"> 
        <input type="reset" value="Nhập lại" class="btn btn-danger mt-2"  style="width: 50%;  height: 40px;">
        <a href="<?= BASE_URL_ADMIN . '?act=sanpham' ?>"><input type="button" value="Danh sách" class="btn btn-success mt-2"></a>
      </div>
     
      </form>
  </div>
</div>
</div>