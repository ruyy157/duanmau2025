<?php require './View/header.php'; ?>

<div class="boxcenter">
  <div class="form-control">
    <H1> Thêm mới loại đồ ăn</H1>
  </div>
  <div class="boxcenter">
    <form action="<?= BASE_URL_ADMIN . '?act=themdanhmuc'?>" method="post" enctype="multipart/form-data">
      <div class="row mb10">
        Mã loại<br>
        <input type="text" name="id" disabled class="form-control">
      </div>
      <div class="row mb10">
        Tên loại<br>
        <input type="text" name="tendanhmuc" class="form-control">
      </div>
      <span class="text-success">
       
      </span>
      

      <div class="row mb-5">
        <input type="submit" value="Thêm mới" class="btn btn-primary mt-2 " style="width: 50%; height: 40px;"> 
        <input type="reset" value="Nhập lại" class="btn btn-danger mt-2"  style="width: 50%;  height: 40px;">
        <a href="<?= BASE_URL_ADMIN . '?act=danhmuc'?>"><input type="button" value="Danh sách" class="btn btn-success mt-2"></a>
      </div>
     
      </form>
  </div>
</div>
</div>