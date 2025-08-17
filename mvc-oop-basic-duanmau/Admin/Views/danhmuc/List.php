<?php require './header.php' ?>
<div class="boxcenter">
    <div class="form-control">
        <h1 class="text-center mb-4">📂 Danh sách các loại đồ ăn</h1>
    </div>

    <!-- THÔNG BÁO THÀNH CÔNG -->
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center fw-bold">
            <?= $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <!-- THÔNG BÁO LỖI -->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger text-center fw-bold">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <div class="form-control shadow-sm p-3 bg-white rounded">
        <table class="table table-striped table-hover text-center align-middle">
            <thead class="table-primary">
                <tr>
                    <th width="5%"><input type="checkbox"></th>
                    <th width="10%">STT</th>
                    <th width="55%">Tên loại</th>
                    <th width="30%">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listDanhMuc as $key => $danhMuc): ?>
                    <tr>
                        <td><input type="checkbox" name="check_<?= $danhMuc['id'] ?>"></td>
                        <td><?= $key + 1 ?></td>
                        <td class="fw-semibold"><?= htmlspecialchars($danhMuc['tendanhmuc']) ?></td>
                        <td>
                            <a href="<?= BASE_URL_ADMIN . '?act=formsuadanhmuc&iddanhmuc=' . $danhMuc['id'] ?>" 
                               class="btn btn-sm btn-warning">
                                Sửa
                            </a>
                            <a href="<?= BASE_URL_ADMIN . '?act=xoadanhmuc&iddanhmuc=' . $danhMuc['id'] ?>" 
                               onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?')" 
                               class="btn btn-sm btn-danger ms-2">
                                Xóa
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <div class="text-end mt-3">
            <a href="<?= BASE_URL_ADMIN . '?act=formthemdanhmuc' ?>" class="btn btn-primary">
                Thêm danh mục
            </a>
        </div>
    </div>
</div>
