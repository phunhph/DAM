<?php
session_start();

// Include các tệp và khởi tạo các controller
include 'controller/HomeController.php';
include 'controller/ProductController.php';
include 'controller/LoginController.php';
$controller = $_GET['controller'] ?? 'home';

switch ($controller) {
    case 'home':
        $homeController = new HomeController();
        $homeController->index();
        break;
    case 'product':
        $productController = new ProductController();
        $productController->index();
        break;
    case 'login':
        $LoginController = new LoginController();
        $LoginController->index();
        break;
    default:
        // Xử lý controller không hợp lệ
        break;
}
