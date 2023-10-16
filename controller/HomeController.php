<?php
include 'DAO/ProductDAO.php';
include 'DAO/CommentDAO.php';
class HomeController
{

    public function index()
    {

        if (isset($_SESSION["role"])) {
            if ($_SESSION['role'] == 1) {
                $ProductDAO = new ProductDAO();
                $count = $ProductDAO->tk();
                include('view/home/homeAdmin.php');
            } else {
                if (isset($_POST['search']) && $_POST['search'] != "") {
                    $ProductDAO = new ProductDAO();
                    $products = $ProductDAO->SelectItem($_POST['search']);
                    $danhmucs = $ProductDAO->showDanhMuc();
                    include('view/home/home.php');
                } else {
                    $ProductDAO = new ProductDAO();
                    $products = $ProductDAO->Select();
                    $danhmucs = $ProductDAO->showDanhMuc();
                    include('view/home/home.php');
                }
            }
        } else {
            if (isset($_POST['search']) && $_POST['search'] != "") {
                $ProductDAO = new ProductDAO();
                $products = $ProductDAO->SelectItem($_POST['search']);
                $danhmucs = $ProductDAO->showDanhMuc();
                include('view/home/home.php');
            } else {
                $ProductDAO = new ProductDAO();
                $products = $ProductDAO->Select();
                $danhmucs = $ProductDAO->showDanhMuc();
                include('view/home/home.php');
            }
        }
    }
    public function laptop()
    {
    }
    public function phone()
    {
    }
    public function phukien()
    {
    }
}
