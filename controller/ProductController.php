<?php
class ProductController
{
    public function index()
    {
        if (isset($_COOKIE["role"])) {
            if ($_COOKIE['role'] == 1) {

                include('view/home/homeAdmin.php');
            } else {
                $ProductDAO = new ProductDAO();
                $product = $ProductDAO->sharelist($_GET['product']);
                include 'view/product/cli/listitem.php';
            }
        } else {
            $ProductDAO = new ProductDAO();
            $products = $ProductDAO->sharelist($_GET['product']);
            include 'view/product/cli/listitem.php';
        }
    }

    public function danhmuc()
    {
        $ProductDAO = new ProductDAO();
        if (isset($_POST['tenloai']) && $_POST['tenloai'] != '') {

            $ProductDAO->add($_POST['tenloai']);
        }
        if (isset($_POST['id']) && $_POST['id'] != '') {

            $ProductDAO->delete($_POST['id']);
        }
        if (isset($_POST['xoa']) && $_POST['xoa'] != '') {
            $ProductDAO->deleteall($_POST['xoa']);
        }
        if (isset($_POST['tenmoi']) && $_POST['tenmoi'] != '') {
            $ProductDAO->update($_POST['id_l'], $_POST['tenmoi']);
        } else {
            $danhmucs = $ProductDAO->showDanhMuc();
        }
        include('view/product/admin/classitemadmin.php');
    }
    public function sanpham()
    {
        include('view/product/admin/iteam.php');
    }
    public function binhluan()
    {
        include('view/home/homeAdmin.php');
    }
}
