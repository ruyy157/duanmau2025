<?php require './header.php' ?>
<div class="boxcenter">
    <div class="form-control">
        <h1 style="text-align: center; margin-bottom: 20px;">Danh sách bình luận</h1>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
        <?php endif; ?>

        <?php if (isset($_SESSION['danger'])): ?>
            <div class="alert danger"><?= $_SESSION['danger']; unset($_SESSION['danger']); ?></div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert error"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
        <?php endif; ?>
    </div>

    <div class="boxcenter">
        <div class="form-control">
            <table class="styled-table" width="100%">
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
                                    <span class="status active">Hiển thị</span>
                                <?php else: ?>
                                    <span class="status hidden">Đã ẩn</span>
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

<style>
    .alert {
        padding: 10px 15px;
        border-radius: 5px;
        margin-bottom: 15px;
        font-weight: bold;
    }
    .alert.success { background: #d4edda; color: #155724; }
    .alert.danger { background: #f8d7da; color: #721c24; }
    .alert.error  { background: #fff3cd; color: #856404; }

    .styled-table {
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 15px;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .styled-table thead {
        background-color: #4CAF50;
        color: white;
        text-align: center;
    }
    .styled-table th, .styled-table td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    .styled-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .styled-table tbody tr:hover {
        background-color: #f1f1f1;
    }
    .btn {
        padding: 6px 12px;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }
    .btn-warning { background-color: #ff9800; }
    .btn-success { background-color: #4CAF50; }
    .status.active { color: green; font-weight: bold; }
    .status.hidden { color: red; font-weight: bold; }
</style>
