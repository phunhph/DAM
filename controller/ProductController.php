<?php
class ProductController
{
    public function index()
    {
        if (isset($_SESSION["role"])) {
            if ($_SESSION["role"] == 1) {

                include('view/home/homeAdmin.php');
            } else {
                $ProductDAO = new ProductDAO();
                $products = $ProductDAO->sharelist($_GET['product']);
                $danhmucs = $ProductDAO->showDanhMuc();
                include 'view/product/cli/listitem.php';
            }
        } else {
            $ProductDAO = new ProductDAO();
            $products = $ProductDAO->sharelist($_GET['product']);
            $danhmucs = $ProductDAO->showDanhMuc();
            include 'view/product/cli/listitem.php';
        }
    }

    public function danhmuc()
    {
        $ProductDAO = new ProductDAO();
        if (isset($_POST['tenloai']) && $_POST['tenloai'] != '') {

            $ProductDAO->addDM($_POST['tenloai']);
        }
        if (isset($_POST['id']) && $_POST['id'] != '') {

            $ProductDAO->deleteDM($_POST['id']);
        }
        if (isset($_POST['xoa']) && $_POST['xoa'] != '') {
            $ProductDAO->deleteallDM($_POST['xoa']);
        }
        if (isset($_POST['tenmoi']) && $_POST['tenmoi'] != '') {
            $ProductDAO->updateDM($_POST['id_l'], $_POST['tenmoi']);
        } else {
            $danhmucs = $ProductDAO->showDanhMuc();
        }
        include('view/product/admin/classitemadmin.php');
    }
    public function sanpham()
    {
        $ProductDAO = new ProductDAO();
        if (isset($_POST['add']) && $_POST['add'] != '') {
            $ProductDAO->addPRO($_POST['tensanpam'], $_POST['gia'], $_FILES['img'], $_POST['mota'], $_POST['iddm']);
        }
        if (isset($_POST['id_x']) && $_POST['id_x'] != '') {
            $ProductDAO->deletePRO($_POST['id_x']);
        }
        if (isset($_POST['fix']) && $_POST['fix'] != '') {
            $ProductDAO->updatePRO($_POST['idsp'], $_POST['tensanpam'], $_POST['gia'], $_FILES['img'], $_POST['mota'], $_POST['iddm']);
        }
        if (isset($_POST['xoa']) && $_POST['xoa'] != '') {
            $ProductDAO->deleteallPRO($_POST['xoa']);
        }
        $danhmucs = $ProductDAO->showDanhMuc();
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $counts = $ProductDAO->countProducts();
        $sanphams = $ProductDAO->showPRO($page, 5);
        include('view/product/admin/iteam.php');
    }
    public function binhluan()
    {

        $ProductDAO = new ProductDAO();
        $commentDAO = new CommentDAO();
        $timestamp = $commentDAO->get_time_present();
        $commentDAO->add($_POST['id_pro'], $_POST['bl'], $_SESSION['acc'], $_POST['time']);
        $sanpham = $ProductDAO->SelectOneItem($_POST['id_pro']);
        $products = $ProductDAO->lq($_POST['iddm']);
        $comments =  $commentDAO->show($_POST['id_pro']);
        $danhmucs = $ProductDAO->showDanhMuc();

        include('view/product/cli/item.php');
    }
    public function item()
    {
        $_GET['id'];
        $ProductDAO = new ProductDAO();
        $commentDAO = new CommentDAO();
        $timestamp = $commentDAO->get_time_present();
        $sanpham = $ProductDAO->SelectOneItem($_GET['id']);
        $products = $ProductDAO->lq($_GET['iddm']);
        $comments =  $commentDAO->show($_GET['id']);
        $danhmucs = $ProductDAO->showDanhMuc();

        include('view/product/cli/item.php');
    }
}
