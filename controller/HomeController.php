<?php
class HomeController
{
    public function index()
    {
        if (isset($_COOKIE["role"])) {
            if ($_COOKIE['role'] == 1) {
                include('view/home/home.php');
            } else {
                include('view/home/home.php');
            }
        } else {
            include('view/home/home.php');
        }
    }
}
