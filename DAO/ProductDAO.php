<?php
include 'modles/product.php';
include 'modles/danhmuc.php';
class ProductDAO
{
    private $PDO;
    public function __construct()
    {
        require_once('../config/PDO.php');
        $this->PDO = $pdo;
    }
    function Select()
    {
        $sql = "SELECT * FROM `sanpham`";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Product($row['id_pro'], $row['name_sp'], $row['img'], $row['price'], $row['mota']);
            $products[] = $product;
        }

        return $products;
    }
    function SelectItem($text)
    {

        $keyword = '%' . $text . '%'; // Thêm '%' ở đầu và cuối chuỗi tìm kiếm
        $sql = "SELECT * FROM `sanpham` WHERE `name_sp` LIKE :keyword";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();

        $products = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Product($row['id_pro'], $row['name_sp'], $row['img'], $row['price'], $row['mota']);
            $products[] = $product;
        }
        return $products;
    }
    public function sharelist($loai)
    {
        $sql = "SELECT sanpham.* FROM `sanpham` 
        JOIN danhmuc ON danhmuc.id_d=sanpham.iddm 
        WHERE danhmuc.name =  '$loai'";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new Product($row['id_pro'], $row['name_sp'], $row['img'], $row['price'], $row['mota']);
            $products[] = $product;
        }
        return $products;
    }
    public function showDanhMuc()
    {
        $sql = "SELECT * FROM `danhmuc`";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $products = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $danhmuc = new danhmuc($row['id_d'], $row['name']);
            $danhmucs[] = $danhmuc;
        }

        return $danhmucs;
    }
    public function add($name)
    {
        $sql = "INSERT INTO `danhmuc`( `name`) VALUES ('$name')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `danhmuc` WHERE id_d=$id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function deleteall($id_a)
    {
        // Chuyển mảng ID thành một chuỗi dạng (id1, id2, id3, ...)
        $id_string = implode(', ', $id_a);
        $sql = "DELETE FROM `danhmuc` WHERE id_d IN ($id_string)";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }

    public function update($id, $name)
    {

        $sql = "UPDATE `danhmuc` SET `name`='$name' WHERE `id_d`=" . $id;
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
}
