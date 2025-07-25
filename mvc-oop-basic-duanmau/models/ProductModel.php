<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class ProductModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllSanPham()
    {
        try {
            $sql = 'SELECT sanpham.*, danhmuc.tendanhmuc
                    FROM sanpham
                    INNER JOIN danhmuc ON sanpham.danh_muc_id = danhmuc.id
                    ORDER BY id DESC LIMIT 6';


            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'lỗi'  . $e->getMessage();
        }
    }
    public function getDetailSanPham($id)
    {
        try {
            $sql = 'SELECT sanpham.*, danhmuc.tendanhmuc
                    FROM sanpham
                    INNER JOIN danhmuc ON sanpham.danh_muc_id = danhmuc.id
                    WHERE sanpham.id = :id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':id' => $id]);

            return $stmt->fetch();
        } catch (Exception $e) {
            echo 'lỗi' . $e->getMessage();
        }
    }
      public function getListSanPhamDanhMuc($danh_muc_id)
    {
        try {
            $sql = 'SELECT sanpham.*, danhmuc.tendanhmuc
                    FROM sanpham
                    INNER JOIN danhmuc ON sanpham.danh_muc_id = danhmuc.id
                    WHERE sanpham.danh_muc_id =  ' . $danh_muc_id;



            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo 'lỗi'  . $e->getMessage();
        }
    }
}
