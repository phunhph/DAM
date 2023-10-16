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
    function get_time_present()
    {
        // Đặt múi giờ thành múi giờ của Việt Nam
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // Lấy thời gian hiện tại
        $currentTime = time();
        // Định dạng ngày tháng năm
        $currentDate = date('Y/m/d', $currentTime);
        return $currentDate;
    }

    //    $timestamp = get_time_present(); // lấy dãy số thời gian hiện tại về
    //    $currentDateTime = date("Y-m-d H:i:s", $timestamp);// chuyển đổi dãy số về dạng năm-tháng-ngày giờ-phút-giây
    //    echo $currentDateTime; // có thể test ngay tại đây
    public function show($id_pro)
    {
        $sql = "SELECT user,noidung,ngaybinhluan FROM `binhluan` JOIN taikhoan ON binhluan.iduser=taikhoan.id_ac JOIN sanpham ON sanpham.id_pro=binhluan.idpro WHERE idpro = '$id_pro'";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();

        $comments = []; // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comment = new commentshow($row['user'], $row['noidung'], $row['ngaybinhluan']);
            $comments[] =  $comment;
        }

        return $comments;
    }
    public function add($id_pro, $text, $id_u, $day)
    {
        $sql = "INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES ('$text','$id_u','$id_pro','$day')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function delete($id)
    {
    }
}
