<?php
// Kết nối CSDL qua PDO
function connectDB() {
    // Kết nối CSDL
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try {
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USERNAME, DB_PASSWORD);

        // cài đặt chế độ báo lỗi là xử lý ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // cài đặt chế độ trả dữ liệu
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
        return $conn;
    } catch (PDOException $e) {
        echo ("Connection failed: " . $e->getMessage());
    }
}
function deleteSessionError()
{
    if (isset($_SESSION['flash'])) {
        unset($_SESSION['flash']);
        unset($_SESSION['error']);
        // session_unset();
        // session_destroy();
    }
}
function uploadFile($file, $folderSave){
    $file_upload = $file;
    $pathStorage = $folderSave . rand(10000, 99999) . $file_upload['name'];

    $tmp_file = $file_upload['tmp_name'];
    $pathSave = PATH_ROOT . $pathStorage; // Đường dãn tuyệt đối của file

    if (move_uploaded_file($tmp_file, $pathSave)) {
        return $pathStorage;
    }
    return null;
}

function deleteFile($file){
    $pathDelete = PATH_ROOT . $file;
    if (file_exists($pathDelete)) {
        unlink($pathDelete); // Hàm unlink dùng để xóa file
    }

}
function checkLoginAdmin()
{
    // Nếu chưa đăng nhập (session chưa tồn tại)
    if (!isset($_SESSION['user_admin'])) {
        // Gán thông báo lỗi (nếu muốn)
        $_SESSION['error'] = "Bạn cần đăng nhập để truy cập trang quản trị!";
        $_SESSION['flash'] = true;

        // Chuyển hướng về trang đăng nhập
        header("Location: " . BASE_URL_ADMIN . '?act=loginadmin');
        exit();
    }
}
