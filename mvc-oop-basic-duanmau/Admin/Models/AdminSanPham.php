<?php
class AdminSanPham
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllSanPham()
    {
        try {
            $sql = 'SELECT sanpham.*, danhmuc.tendanhmuc
            FROM sanpham
            INNER JOIN danhmuc ON sanpham.danh_muc_id = danhmuc.id
            ';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function insertSanPham(
        $tensp,
        $mota,
        $giasp,
        $giakm,
        $soluong,
        $danh_muc_id,
        $hinhanh,
    ) {
        try {
            $sql = 'INSERT INTO sanpham (
             tensp,
        mota,
        giasp,
        giakm,
        soluong,
        danh_muc_id,
        hinhanh)
                    VALUES(
        :tensp,
        :mota,
        :giasp,
        :giakm,
        :soluong,
        :danh_muc_id,
        :hinhanh
        )';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':tensp' => $tensp,
                ':giasp' => $giasp,
                ':giakm' => $giakm,
                ':soluong' => $soluong,
                ':danh_muc_id' => $danh_muc_id,
                ':hinhanh' => $hinhanh,
                ':mota' => $mota
            ]);
            return $this->conn->lastInsertID();
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function insertAlbumAnhSanPham($san_pham_id, $link_hinhanh)
    {
        try {
            $sql = 'INSERT INTO hinhanh_sanpham (san_pham_id, link_hinhanh)
                    VALUES (:san_pham_id, :link_hinhanh)';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':san_pham_id' => $san_pham_id,
                ':link_hinhanh' => $link_hinhanh,
            ]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }

    public function getDetailSanPham($id)
    {
        try {
            $sql = 'SELECT sanpham.*,danhmuc.tendanhmuc
                FROM sanpham
                INNER JOIN danhmuc ON sanpham.danh_muc_id = danhmuc.id
             WHERE sanpham.id = :id'; // Sửa câu lệnh SQL

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch(); // Trả về kết quả
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage(); // Hiển thị lỗi
        }
    }

    public function getListAnhSanPham($id)
    {
        try {
            $sql = 'SELECT * FROM hinhanh_sanpham WHERE san_pham_id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function updateSanPham(
    $san_pham_id,
    $tensp,
    $mota,
    $giasp,
    $giakm,
    $soluong,
    $danh_muc_id,
    $hinhanh
) {
    try {
        $sql = 'UPDATE sanpham 
                SET tensp = :tensp,
                    mota = :mota,
                    giasp = :giasp,
                    giakm = :giakm,
                    soluong = :soluong,
                    danh_muc_id = :danh_muc_id,
                    hinhanh = :hinhanh
                WHERE id = :id';

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':tensp' => $tensp,
            ':mota' => $mota,
            ':giasp' => $giasp,
            ':giakm' => $giakm,
            ':soluong' => $soluong,
            ':danh_muc_id' => $danh_muc_id,
            ':hinhanh' => $hinhanh,
            ':id' => $san_pham_id
        ]);

        return true;
    } catch (Exception $e) {
        echo "Lỗi: " . $e->getMessage();
        return false;
    }
}

    public function getDetailAnhSanPham($id)
    {
        try {
            $sql = 'SELECT * FROM hinhanh_sanpham WHERE id = :id'; // Sửa câu lệnh SQL

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch(); // Trả về kết quả
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage(); // Hiển thị lỗi
        }
    }

    public function updateAnhSanPham(
        $id,
        $new_file,


    ) {
        try {

            $sql = 'UPDATE hinhanh_sanpham 
                    SET link_hinhanh = :new_file,
                    
                     
                       
                    WHERE id = :id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':new_file' => $new_file,
                ':id' => $id,

            ]);
            return true;
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
            return false;
        }
    }
    public function destroyAnhSanPham($id)
    {
        try {
            $sql = 'DELETE FROM hinhanh_sanpham WHERE id=:id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([

                ':id' => $id
            ]);
            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function destroySanPham($id)
    {
        try {
            $sql = 'DELETE FROM sanpham WHERE id=:id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([

                ':id' => $id
            ]);
            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }


    // bình luận
        public function getBinhLuanFormSanPham($id)
    {

        try {
            $sql = 'SELECT binhluan.*, taikhoan.hoten
                    FROM binhluan
                    INNER JOIN taikhoan 
                    ON binhluan.tai_khoan_id = taikhoan.id
                    WHERE binhluan.san_pham_id= :id
                    AND binhluan.trangthai = 1

                    ';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
