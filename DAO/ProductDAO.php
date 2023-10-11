<?php
include 'modles/product.php';
class ProductDAO
{
    private $PDO;
    public function __construct()
    {
        require_once('../config/PDO.php');
        $this->PDO = $pdo;
    }
    public function topProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->PDO->prepare($sql);
        // $stmt->bindParam(':category', $category);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function Select()
    {
        $sql = "SELECT * FROM `sanpham`";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Product($row['id'], $row['name'], $row['img'], $row['price']);
            $products[] = $product;
        }

        return $products;
    }
    public function add()
    {
    }
    public function delete($id)
    {
    }
    public function update()
    {
    }
}
