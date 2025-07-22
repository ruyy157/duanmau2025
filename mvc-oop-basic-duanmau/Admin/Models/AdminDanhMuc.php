<?php
class AdminDanhMuc
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }
    public function getAllDanhMuc()
    {
        try {
            $sql = 'SELECT * FROM danhmuc';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function insertDanhMuc($tendanhmuc)
    {
        try {
            $sql = 'INSERT INTO danhmuc (tendanhmuc)
                    VALUES(:tendanhmuc)';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':tendanhmuc' => $tendanhmuc,
            ]);
            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function getDetailDanhMuc($id)
    {
        try {
            $sql = 'SELECT * FROM danhmuc WHERE id = :id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function updateDanhMuc($id, $tendanhmuc)
    {
        try {
            $sql = 'UPDATE danhmuc SET tendanhmuc=:tendanhmuc WHERE id=:id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':tendanhmuc' => $tendanhmuc,
                ':id' => $id
            ]);
            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
    public function destroyDanhMuc($id)
    {
        try {
            $sql = 'DELETE FROM danhmuc WHERE id=:id';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([

                ':id' => $id
            ]);
            return true;
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }
}
