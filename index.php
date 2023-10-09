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
    case 'product':
        if ($_GET['product'] == 'laptop') {
            $ProductLaptop = new ProductLaptop();
            $ProductLaptop->index();
        } elseif ($_GET['product'] == 'phone') {
            $productPhone = new ProductPhone;
            $productPhone->index();
        } elseif ($_GET['product'] == 'phukien') {
            $Productphukien = new Productphukien();
            $Productphukien->index();
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
