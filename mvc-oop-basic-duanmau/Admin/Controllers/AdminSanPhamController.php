<?php
class AdminSanPhamController
{
    public $modelSanPham;
    public $modelDanhMuc;
    public function __construct()
    {
        $this->modelSanPham = new AdminSanPham();
        $this->modelDanhMuc = new AdminDanhMuc();
    }
    public function danhSachSanPham()
    {
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once './Views/sanpham/List.php';
    }
    public function formAddSanPham()
    {
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        require_once './Views/sanpham/Add.php';

        // deleteSessionError();
    }
  public function postAddSanPham()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Lấy dữ liệu từ form
        $tensp = $_POST['tensp'] ?? '';
        $giasp = $_POST['giasp'] ?? '';
        $giakm = $_POST['giakm'] ?? '';
        $soluong = $_POST['soluong'] ?? '';
        $danh_muc_id = $_POST['danh_muc_id'] ?? '';
        $mota = $_POST['mota'] ?? '';
        $hinhanh = $_FILES['hinhanh'] ?? null;  // Thumbnail
        $img_array = $_FILES['img_array'] ?? [];  // Album ảnh

        $errors = [];

        // Validate tên sản phẩm
        if (empty($tensp)) {
            $errors['tensp'] = 'Tên sản phẩm không được để trống';
        }

        // Validate giá
        if (!is_numeric($giasp) || $giasp < 0) {
            $errors['giasp'] = 'Giá sản phẩm phải là số dương';
        }

        // Validate giá khuyến mãi
        if (!empty($giakm)) {
            if (!is_numeric($giakm) || $giakm < 0) {
                $errors['giakm'] = 'Giá khuyến mãi phải là số dương';
            } elseif ($giakm > $giasp) {
                $errors['giakm'] = 'Giá khuyến mãi không được lớn hơn giá gốc';
            }
        }

        // Validate số lượng
        if (!is_numeric($soluong) || $soluong < 0) {
            $errors['soluong'] = 'Số lượng phải là số dương';
        }

        // Validate danh mục
        if (!is_numeric($danh_muc_id) || $danh_muc_id <= 0) {
            $errors['danh_muc_id'] = 'Danh mục không hợp lệ';
        }

        // Validate thumbnail
        $allowTypes = ['image/jpeg', 'image/png', 'image/webp'];
        if ($hinhanh['error'] != 0 || !in_array($hinhanh['type'], $allowTypes)) {
            $errors['hinhanh'] = 'Phải chọn hình ảnh hợp lệ (jpg, png, webp)';
        }

        // Nếu có lỗi, lưu vào session và quay lại form
        if (!empty($errors)) {
            $_SESSION['error'] = $errors;
            header("Location:" . BASE_URL_ADMIN . '?act=formthemsanpham');
            exit();
        }

        // Upload file thumbnail
        $file_thumb = uploadFile($hinhanh, './uploads/');

        // Chèn thông tin sản phẩm vào database
        $san_pham_id = $this->modelSanPham->insertSanPham(
            $tensp,
            $mota,
            $giasp,
            $giakm,
            $soluong,
            $danh_muc_id,
            $file_thumb
        );

        // Xử lý upload nhiều ảnh album nếu có
        if (!empty($img_array['name'][0])) {
            foreach ($img_array['name'] as $key => $value) {
                $file = [
                    'name' => $img_array['name'][$key],
                    'type' => $img_array['type'][$key],
                    'tmp_name' => $img_array['tmp_name'][$key],
                    'error' => $img_array['error'][$key],
                    'size' => $img_array['size'][$key],
                ];

                // Chỉ upload nếu là file hình ảnh hợp lệ
                if ($file['error'] == 0 && in_array($file['type'], $allowTypes)) {
                    $link_hinhanh = uploadFile($file, './uploads/');
                    $this->modelSanPham->insertAlbumAnhSanPham($san_pham_id, $link_hinhanh);
                }
            }
        }

        // Sau khi thêm, chuyển về trang danh sách
        header("Location:" . BASE_URL_ADMIN . '?act=sanpham');
        exit();
    }
}


    public function formEditSanPham()
    {
        $id = $_GET['idsanpham'] ?? '';
        $sanPham = $this->modelSanPham->getDetailSanPham($id);
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        if ($sanPham) {
            require_once './Views/sanpham/Edit.php';
            // deleteSessionError();
        } else {
            header("Location:" . BASE_URL_ADMIN . '?act=sanpham');
            exit();
        }
    }
 public function postEditSanPham()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $san_pham_id = $_POST['san_pham_id'] ?? '';
        $sanPhamOld = $this->modelSanPham->getDetailSanPham($san_pham_id);
        $old_file = $sanPhamOld['hinhanh'];

        $tensp = $_POST['tensp'] ?? '';
        $giasp = $_POST['giasp'] ?? '';
        $giakm = $_POST['giakm'] ?? '';
        $soluong = $_POST['soluong'] ?? '';
        $danh_muc_id = $_POST['danh_muc_id'] ?? '';
        $mota = $_POST['mota'] ?? '';
        $hinhanh = $_FILES['hinhanh'] ?? null;

        $errors = [];

        // ✅ Kiểm tra dữ liệu nhập vào
        if (empty($tensp)) {
            $errors['tensp'] = 'Tên sản phẩm không được để trống';
        }

        if (!is_numeric($giasp) || $giasp < 0) {
            $errors['giasp'] = 'Giá sản phẩm phải là số dương';
        }

        if (!empty($giakm)) {
            if (!is_numeric($giakm) || $giakm < 0) {
                $errors['giakm'] = 'Giá khuyến mãi phải là số dương';
            } elseif ($giakm > $giasp) {
                $errors['giakm'] = 'Giá khuyến mãi không được lớn hơn giá gốc';
            }
        }

        if (!is_numeric($soluong) || $soluong < 0) {
            $errors['soluong'] = 'Số lượng phải là số dương';
        }

        if (!is_numeric($danh_muc_id) || $danh_muc_id <= 0) {
            $errors['danh_muc_id'] = 'Danh mục không hợp lệ';
        }

        // ✅ Nếu có lỗi → chuyển về form sửa
        if (!empty($errors)) {
            $_SESSION['error'] = $errors;
            header("Location:" . BASE_URL_ADMIN . '?act=formsuasanpham&id_san_pham=' . $san_pham_id);
            exit();
        }

        // ✅ Xử lý upload ảnh nếu có ảnh mới
        if ($hinhanh && $hinhanh['error'] == UPLOAD_ERR_OK) {
            $allowTypes = ['image/jpeg', 'image/png', 'image/webp'];
            if (!in_array($hinhanh['type'], $allowTypes)) {
                $_SESSION['error'] = ['hinhanh' => 'Chỉ cho phép ảnh JPG, PNG hoặc WebP'];
                header("Location:" . BASE_URL_ADMIN . '?act=formsuasanpham&id_san_pham=' . $san_pham_id);
                exit();
            }

            $new_file = uploadFile($hinhanh, './uploads/');
            if (!empty($old_file)) {
                deleteFile($old_file);
            }
        } else {
            $new_file = $old_file; // Giữ lại ảnh cũ
        }

        // ✅ Cập nhật sản phẩm
        $this->modelSanPham->updateSanPham(
            $san_pham_id,
            $tensp,
            $mota,
            $giasp,
            $giakm,
            $soluong,
            $danh_muc_id,
            $new_file
        );

        // ✅ Chuyển về trang danh sách
        header("Location:" . BASE_URL_ADMIN . '?act=sanpham');
        exit();
    }
}



    public function postEditAnhSanPham()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $san_pham_id = $_POST['san_pham_id'] ?? '';
            //lấy danh sách ảnh hieejntaij của sp
            $listAnhSanPhamCurrent = $this->modelSanPham->getListAnhSanPham($san_pham_id);

            //sử lí ảnh dc gửi từ form

            $img_array = $_FILES['img_array'];
            $img_delete = isset($_POST['img_delete']) ? explode(',', $_POST['img_delete']) : [];
            $current_img_ids = $_POST['current_img_ids'] ?? [];

            $upload_file = [];

            //upload ảnh mới hoặc thay thế ảnh cũ
            foreach ($img_array['name'] as $key => $value) {
                if ($img_array['error']['$key'] == UPLOAD_ERR_OK) {
                    $new_file = uploadFileAlbum($img_array, './uploads/', $key);
                    if ($new_file) {
                        $upload_file[] = [
                            'id' => $current_img_ids[$key] ?? null,
                            'file' => $new_file
                        ];
                    }
                }
            }

            foreach ($upload_file as $file_info) {
                if ($file_info['id']) {
                    $old_file = $this->modelSanPham->getDetailAnhSanPham($file_info['id'])['link_hinhanh'];

                    //

                    //cập nhật ảnh cũ
                    $this->modelSanPham->updateAnhSanPham($file_info['id'], $file_info['file']);


                    deleteFile($old_file);
                } else {
                    //thêm ảnh mới
                    $this->modelSanPham->insertAlbumAnhSanPham($san_pham_id, $file_info['file']);
                }
            }

            //sử lí xóa ảnh
            foreach ($listAnhSanPhamCurrent as $anhSP) {
                $anh_id = $anhSP['id'];
                if (in_array($anh_id, $img_delete)) {
                    $this->modelSanPham->destroyAnhSanPham($anh_id);

                    //xóa file
                    deleteFile($anhSP['link_hinhanh']);
                }
            }
            header("Location:" . BASE_URL_ADMIN . '?act=formsuasanpham&id_san_pham=' . $san_pham_id);
            exit();
        }
    }
    public function deleteSanPham()
    {
        $id = $_GET['idsanpham'];
        $sanPham = $this->modelSanPham->getDetailSanPham($id);
        $listAnhSanPham = $this->modelSanPham->getListAnhSanPham($id);
        if ($sanPham) {
            deleteFile($sanPham['hinhanh']);
            $this->modelSanPham->destroySanPham($id);
        }
        if ($listAnhSanPham) {
            foreach ($listAnhSanPham as $key => $anhSP) {
                deleteFile($anhSP['link_hinhanh']);
                $this->modelSanPham->destroyAnhSanPham($anhSP['id']);
            }
        }
        header("Location:" . BASE_URL_ADMIN . '?act=sanpham');
        exit();
    }
    public function detailSanPham()
    {
        $id = $_GET['idsanpham'];
        $sanPham = $this->modelSanPham->getDetailSanPham($id);

        if ($sanPham) {
            require_once './Views/sanpham/Detail.php';
        } else {
            header("Location:" . BASE_URL_ADMIN . '?act=sanpham');
            exit();
        }
    }
    
}
