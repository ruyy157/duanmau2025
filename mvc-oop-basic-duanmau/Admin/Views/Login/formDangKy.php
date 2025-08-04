<h2>Đăng ký tài khoản quản trị</h2>

<?php if (isset($_SESSION['error'])): ?>
    <p style="color: red;"><?= $_SESSION['error'] ?></p>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<form action="<?= BASE_URL_ADMIN . '?act=dangkyadmin'?>" method="post">
    <label for="">Họ tên</label>
    <input type="text" name="hoten" id="hoten" placeholder="Nhập họ tên" required><br><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mật khẩu:</label><br>
    <input type="password" name="matkhau" required><br><br>

    <label>Nhập lại mật khẩu:</label><br>
    <input type="password" name="nhaplaimatkhau" required><br><br>

    <button type="submit">Đăng ký</button>
</form>
