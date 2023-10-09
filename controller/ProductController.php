<?php
class ProductController
{
    public function index()
    {
        include 'view/product/cli/listitem.php';
    }
}
class ProductPhone
{
    public function index()
    {
        $ProductDAO = new ProductDAO();
        $ProductDAO->Select();
        include 'view/product/cli/listitem.php';
    }
}
class ProductLaptop
{
    public function index()
    {
        include 'view/product/cli/listitem.php';
    }
}
class Productphukien
{
    public function index()
    {
        include 'view/product/cli/listitem.php';
    }
}
