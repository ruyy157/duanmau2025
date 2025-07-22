<?php
class AdminSanpham
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Function to get all products for admin
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Additional functions for product management can be added here
}