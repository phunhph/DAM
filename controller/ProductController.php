<?php
class ProductController
{
    public function index()
    {
        if (isset($_COOKIE["role"])) {
            if ($_COOKIE['role'] == 1) {

                include('view/home/homeAdmin.php');
            } else {
                include 'view/product/cli/listitem.php';
            }
        } else {
            include 'view/product/cli/listitem.php';
        }
    }

    public function Phone()
    {

        include 'view/product/cli/listitem.php';
    }


    public function laptop()
    {
        include 'view/product/cli/listitem.php';
    }



    public function phukien()
    {
        include 'view/product/cli/listitem.php';
    }

    public function danhmuc()
    {
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
