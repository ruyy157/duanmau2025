<?php include "./header.php" ?>
<style>
    .stats-container {
        display: flex;
        gap: 20px;
        margin: 20px 0;
    }
    .stat-card {
        flex: 1;
        background: #f5f5f5;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    }
    .stat-card h2 {
        font-size: 28px;
        margin: 10px 0;
        color: #007bff;
    }
    .stat-card p {
        font-size: 16px;
        color: #555;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table th, table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }
    table th {
        background-color: #007bff;
        color: white;
    }
    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>

<div class="boxcenter">
    <div class="form-control">
        <h1 style="text-align:center; margin-bottom: 20px;">📊 Thống kê</h1>
    </div>

    <!-- Thẻ thống kê -->
    <div class="stats-container">
        <div class="stat-card">
            <p>Tổng số sản phẩm</p>
            <h2><?= $tongSanPham['tong_san_pham'] ?></h2>
        </div>
        <div class="stat-card">
            <p>Tổng số danh mục</p>
            <h2><?= $tongDanhMuc['tong_danh_muc'] ?></h2>
        </div>
    </div>

    <!-- Bảng bình luận -->
    <div class="form-control">
        <h3 style="margin-bottom:10px;">💬 Số bình luận theo sản phẩm</h3>
        <table>
            <tr>
                <th>ID sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số bình luận</th>
            </tr>
            <?php foreach ($binhLuanTheoSP as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['tensp'] ?></td>
                    <td><?= $row['so_binh_luan'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
