<?php
session_start();

// Include các tệp và khởi tạo các controller
include 'controller/HomeController.php';
include 'controller/ProductController.php';
include 'controller/LoginController.php';
include 'controller/UserController.php';
$controller = $_GET['controller'] ?? 'home';


switch ($controller) {
    case 'home':
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'danhmuc':
        $productController = new ProductController();
        $productController->danhmuc();
        break;
    case 'hanghoa':
        $productController = new ProductController();
        $productController->index();
        break;
    case 'khachang':
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'logout':
        $LoginController = new LoginController();
        $LoginController->logout();
        break;
    case 'binhluan':
        $productController = new ProductController();
        $productController->binhluan();
        break;
    case 'product':
        if ($_GET['product'] == 'laptop') {
            $ProductLaptop = new ProductController();
            $ProductLaptop->laptop();
        } elseif ($_GET['product'] == 'phone') {
            $productPhone = new ProductController();
            $productPhone->Phone();
        } elseif ($_GET['product'] == 'phukien') {
            $Productphukien = new ProductController();
            $Productphukien->phukien();
        } else {
            $productController = new ProductController();
            $productController->index();
        }
        break;
    case 'login':
        if ($_GET['act'] == 'signup') {
            $LoginController = new LoginController();
            $LoginController->index();
        } elseif ($_GET['act'] == 'signin') {
            $LoginController = new LoginController();
            $LoginController->login();
        }
        if (isset($_COOKIE["role"])) {
            $UserController = new UserController();
            $UserController->index();
        } else {
            $LoginController = new LoginController();
            $LoginController->index();
        }
        break;
    default:
        // Xử lý controller không hợp lệ
        break;
}
