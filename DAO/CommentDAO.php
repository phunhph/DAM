<?php
include 'modles/comment.php';
class CommentDAO
{
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }
    public function show($id_pro)
    {
        $sql = "SELECT user,noidung,ngaybinhluan FROM `binhluan` JOIN taikhoan ON binhluan.iduser=taikhoan.id_ac JOIN sanpham ON sanpham.id_pro=binhluan.idpro WHERE idpro = '$id_pro'";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comment = new commentshow($row['user'], $row['noidung'], $row['ngaybinhluan']);
            $comments[] =  $comment;
        }

        return $comments;
    }
    public function add($id_pro, $text, $id_u, $day)
    {
    }
    public function delete($id)
    {
    }
}
