<?php
include 'DAO/ProductDAO.php';
class HomeController
{

    public function index()
    {

        if (isset($_COOKIE["role"])) {
            if ($_COOKIE['role'] == 1) {
                include('view/home/homeAdmin.php');
            } else {
                $ProductDAO = new ProductDAO();
                $products = $ProductDAO->Select();
                include('view/home/home.php');
            }
        } else {
            $ProductDAO = new ProductDAO();
            $products = $ProductDAO->Select();
            include('view/home/home.php');
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
