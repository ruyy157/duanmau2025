<?php require './header.php'; ?>

<div class="boxcenter">
    <div class="form-control">
        <H1>CẬP NHẬT LOẠI HÀNG HÓA</H1>
    </div>
    <div class="boxcenter">
        <form action="<?= BASE_URL_ADMIN . '?act=suadanhmuc' ?>" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="id" disabled class="form-control">
            </div>
            <div class="row mb10">
                Tên loại<br>
                <input type="text" name="tendanhmuc" class="form-control" value="<?= $danhMuc['tendanhmuc'] ?>">
              
            </div>
            <span class="text-danger">

            </span>


            <div class="row mb-5">
                <input type="hidden" name="id" value="<?= $danhMuc['id'] ?>">
                <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-primary mt-2 " style="width: 50%; height: 40px;">
                <input type="reset" value="Nhập lại" class="btn btn-danger mt-2" style="width: 50%;  height: 40px;">
                <a href="<?= BASE_URL_ADMIN . '?act=danhmuc' ?>"><input type="button" value="Danh sách" class="btn btn-success mt-2"></a>
            </div>

        </form>
    </div>
</div>
</div>