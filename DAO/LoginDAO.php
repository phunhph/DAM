<?php
include 'modles/Login.php';
class LoginDAO
{
    private $PDO;
    public function __construct()
    {
        require_once('config/PDO.php');
        $this->PDO = $pdo;
    }
    public function topProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->PDO->prepare($sql);
        // $stmt->bindParam(':category', $category);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function Login($user, $pass)
    {
        $sql = "SELECT id_ac, role FROM taikhoan WHERE email = :user AND pass = :pass";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':user', $user, PDO::PARAM_STR);
        $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
        $stmt->execute();

        $data = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Create an associative array with 'id_u' and 'role' keys
            $userData = array(
                'id_u' => $row['id_ac'],
                'role' => $row['role']
            );

            // Add the user data to the data array
            $data[] = $userData;
        }

        return $data; // Return an array containing 'id_u' and 'role'
    }
}
