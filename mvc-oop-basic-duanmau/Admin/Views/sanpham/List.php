<?php include "./header.php" ?>
<div class="boxcenter">
    <div class="form-control">
        <h1>Danh sách đồ ăn</h1>
    </div>

    <div class="boxcenter">
        <div class="form-control">
            <table class="table"border="1" cellpadding="10" cellspacing="0" width="100%">
                <tr>
                    <th></th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá</th>
                    <th>Giá Khuyến Mãi</th>
                    <th>Hình Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Mô Tả</th>
                    <th>Hành Động</th>
                </tr>


                <?php foreach ($listSanPham as $key => $sanPham): ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $key + 1 ?></td>
                        <td> <?= $sanPham['tensp'] ?></td>
                        <td> <?= $sanPham['giasp'] ?></td>
                        <td><?=$sanPham['giakm']?></td>
                        <td>
                            <img src="<?= BASE_URL . $sanPham['hinhanh'] ?>"
                                </td>
                        <td> <?= $sanPham['soluong'] ?></td>
                        <td> <?= $sanPham['mota'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?= BASE_URL_ADMIN . '?act=chitietsanpham&idsanpham=' . $sanPham['id'] ?>">
                                    <button class="btn btn-danger"><i class="fa-solid fa-eye"></i></button></a>
                                <a href="<?= BASE_URL_ADMIN . '?act=formsuasanpham&idsanpham=' . $sanPham['id'] ?>">
                                    <button class="btn btn-success"><i class=" fas fa-solid fa-hammer"></i></i></button></a>

                                <a href="<?= BASE_URL_ADMIN . '?act=xoasanpham&idsanpham=' . $sanPham['id'] ?>
                                                 " onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')">


                                    <button class="btn btn-warning"><i class="far fa-trash-alt"></i></i></button></a>

                            </div>
                        </td>

                    </tr>

                <?php endforeach ?>

            </table>
        </div>
        <div class="row mb ">

            <a href="<?= BASE_URL_ADMIN . '?act=formthemsanpham' ?>">
                <input type="button" value="Nhập thêm" class="btn btn-primary mt-3"></a>
        </div>
    </div>
</div>