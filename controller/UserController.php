<?php
class UserController
{
    public function index()
    {
        if (isset($_COOKIE["role"])) {
            if ($_COOKIE['role'] == 1) {
                include('view/user/useradmin.php');
            } else {
                include 'view/user/user.php';
            }
        }
    }
}
