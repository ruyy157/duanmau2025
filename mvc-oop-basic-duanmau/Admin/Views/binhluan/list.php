<?php require './header.php' ?>
<div class="boxcenter">
    <div class="form-control">
        <h1>Danh sách bình luận</h1>
       <?php if (isset($_SESSION['success'])): ?>
    <p style="color: green; font-weight: bold;"><?= $_SESSION['success']; unset($_SESSION['success']); ?></p>
<?php endif; ?>

<?php if (isset($_SESSION['danger'])): ?>
    <p style="color: red; font-weight: bold;"><?= $_SESSION['danger']; unset($_SESSION['danger']); ?></p>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <p style="color: red; font-weight: bold;"><?= $_SESSION['error']; unset($_SESSION['error']); ?></p>
<?php endif; ?>

    </div>

    <div class="boxcenter">
        <div class="form-control">
            <table class="table" border="1" cellpadding="10" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>STT</th>
                        <th>Tên người dùng</th>
                        <th>Sản phẩm</th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listbinhluan as $key => $binhluan): ?>
                        <tr>
                            <td><input type="checkbox" name="check_<?= $binhluan['id'] ?>"></td>
                            <td><?= $key + 1 ?></td>
                            <td><?= htmlspecialchars($binhluan['hoten']) ?></td>
                            <td><?= htmlspecialchars($binhluan['tensp']) ?></td>
                            <td><?= htmlspecialchars($binhluan['noidung']) ?></td>
                            <td><?= $binhluan['ngaydang'] ?></td>
                            <td>
                                <?php if ($binhluan['trangthai'] == 1): ?>
                                    <span style="color: green;">Hiển thị</span>
                                <?php else: ?>
                                    <span style="color: red;">Đã ẩn</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($binhluan['trangthai'] == 1): ?>
                                    <a href="<?= BASE_URL_ADMIN . '?act=anbinhluan&id=' . $binhluan['id'] ?>" 
                                       onclick="return confirm('Bạn có chắc chắn muốn ẩn bình luận này?')">
                                        <button class="btn btn-warning">Ẩn</button>
                                    </a>
                                <?php else: ?>
                                    <a href="<?= BASE_URL_ADMIN . '?act=hienbinhluan&id=' . $binhluan['id'] ?>" 
                                       onclick="return confirm('Bạn có chắc chắn muốn hiện lại bình luận này?')">
                                        <button class="btn btn-success">Hiện</button>
                                    </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
