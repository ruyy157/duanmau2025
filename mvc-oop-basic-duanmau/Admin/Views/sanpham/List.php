<?php include "./header.php" ?>

<div class="boxcenter">
    <div class="form-control mb-3">
        <h1 class="text-center text-primary">📋 Danh sách đồ ăn</h1>
    </div>

    <div class="row g-3">
        <?php foreach ($listSanPham as $key => $sanPham): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= BASE_URL . $sanPham['hinhanh'] ?>" 
                         class="card-img-top" 
                         alt="Ảnh sản phẩm" 
                         style="height: 200px; object-fit: cover;">
                    
                    <div class="card-body">
                        <h5 class="card-title text-truncate"><?= $sanPham['tensp'] ?></h5>
                        <p class="card-text mb-1">
                            <span class="fw-bold text-danger"><?= number_format($sanPham['giasp'], 0, ',', '.') ?>đ</span>
                            <?php if ($sanPham['giakm'] > 0): ?>
                                <span class="text-success ms-2"><?= number_format($sanPham['giakm'], 0, ',', '.') ?>đ</span>
                            <?php endif; ?>
                        </p>
                        <p class="text-muted mb-1">Số lượng: <?= $sanPham['soluong'] ?></p>
                        <p class="small text-truncate" style="max-width: 250px;"><?= $sanPham['mota'] ?></p>
                    </div>
                    
                    <div class="card-footer d-flex justify-content-between">
                        <a href="<?= BASE_URL_ADMIN . '?act=chitietsanpham&idsanpham=' . $sanPham['id'] ?>" 
                           class="btn btn-info btn-sm">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="<?= BASE_URL_ADMIN . '?act=formsuasanpham&idsanpham=' . $sanPham['id'] ?>" 
                           class="btn btn-success btn-sm">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="<?= BASE_URL_ADMIN . '?act=xoasanpham&idsanpham=' . $sanPham['id'] ?>" 
                           onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')" 
                           class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="text-end mt-4">
        <a href="<?= BASE_URL_ADMIN . '?act=formthemsanpham' ?>" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> Nhập thêm sản phẩm
        </a>
    </div>
</div>
