<?php
include 'DAO/LoginDAO.php';
class LoginController
{
    public function index()
    {
        if (isset($_COOKIE["rank"])) {
            include('view/home/home.php');
        } else {
            include('view/login/login.php');
        }
    }
    public function login()
    {

        $username = $_POST['email'];
        $password = $_POST['pass'];

        $loginDAO = new LoginDAO();
        $userInfo = $loginDAO->login($username, $password);

        if ($userInfo) {
            // Lấy vai trò (role) từ dữ liệu người dùng

            $role = $userInfo;
            //print_r($role);

            // // Thiết lập cookie cho vai trò (role)
            setcookie("role", $role, time() + 3600, "/");

            // Chuyển hướng sau khi đăng nhập thành công
            header("Location: index.php?controller=home");
            exit();
        } else {
            // Đăng nhập thất bại, xử lý lỗi ở đây (ví dụ: thông báo lỗi)
            echo "Đăng nhập thất bại.";
        }
    }
    public function signup()
    {
    }
    public function logout()
    {
    }
}
