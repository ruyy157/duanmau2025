<?php require './View/header.php'; ?>
<div class="boxcenter">
    <div class="form-control">
        <h1>Danh sách các loại đồ ăn</h1>
    </div>
    <div class="boxcenter">
        <div class="form-control">
            <table class="table">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>

                    <th>Hành động</th>
                </tr>
                <?php foreach ($listDanhMuc as $key => $danhMuc): ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $key + 1 ?></td>
                        <td><?= $danhMuc['tendanhmuc'] ?></td>
                        <td>
                            <a href="<?= BASE_URL_ADMIN . '?act=formsuadanhmuc&iddanhmuc=' . $danhMuc['id'] ?>">
                                <button class="btn btn-danger"> Sửa</button></a>
                            <a href="<?= BASE_URL_ADMIN . '?act=xoadanhmuc&iddanhmuc=' . $danhMuc['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">
                                <button class="btn btn-warning">Xóa</button></a>
                        </td>

                    </tr>

                <?php endforeach ?>
            </table>
        </div>
        <div class="row mb ">
            <a href="<?= BASE_URL_ADMIN . '?act=formthemdanhmuc' ?>">
                <input type="button" value="Nhập thêm" class="btn btn-primary mt-3"></a>
        </div>
    </div>
</div>