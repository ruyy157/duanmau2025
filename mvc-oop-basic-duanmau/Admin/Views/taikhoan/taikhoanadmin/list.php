<?php include "./header.php" ?>
<div class="boxcenter">
    <div class="form-control mb-3">
        <h1 class="text-center text-primary">👤 Danh sách người dùng</h1>
    </div>

    <div class="boxcenter">
        <div class="form-control shadow-sm p-3">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-success text-center">
                    <tr>
                        <th><input type="checkbox" class="form-check-input"></th>
                        <th>STT</th>
                        <th>Tên Người Dùng</th>
                        <th>Email</th>
                        <th>Mật Khẩu</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listtaikhoan as $key => $taikhoan): ?>
                        <tr>
                            <td class="text-center"><input type="checkbox" class="form-check-input"></td>
                            <td class="text-center fw-bold"><?= $key + 1 ?></td>
                            <td><?= htmlspecialchars($taikhoan['hoten']) ?></td>
                            <td><?= htmlspecialchars($taikhoan['email']) ?></td>
                            <td><span class="text-muted">••••••</span></td>
                            <td class="text-center">
                                <a href="<?= BASE_URL_ADMIN . '?act=chitiettaikhoan&id=' . $taikhoan['id'] ?>" 
                                   class="btn btn-info btn-sm">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="<?= BASE_URL_ADMIN . '?act=suataikhoan&id=' . $taikhoan['id'] ?>" 
                                   class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="<?= BASE_URL_ADMIN . '?act=xoataikhoan&id=' . $taikhoan['id'] ?>" 
                                   onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này?')" 
                                   class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
