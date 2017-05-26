<?php
include('../connect/connect.php');

if (isset($_GET['search'])) {
    $id = $_GET['id'];
    $maKH = $_GET['maKH'];
    $nameKH = $_GET['nameKH'];
    $tour = $_GET['tour'];
    $sql = 'Select DangKy.id,KhachHang.Id,KhachHang.Name,tour.name from KhachHang,DangKy,tour where KhachHang.Id = DangKy.khachHang_id '
            . 'and tour.id = DangKy.tour_id and KhachHang.Name LIKE "%' . $nameKH . '%"   and KhachHang.id LIKE "%' . $maKH . '%"'
            . ' and tour.name LIKE "%' . $tour . '%" or DangKy.id = "' . $id . '"';
//   
} else
    $sql = 'Select DangKy.id,KhachHang.Id,KhachHang.Name,tour.name from KhachHang,DangKy,tour  where KhachHang.Id = DangKy.khachHang_id and tour.id = DangKy.tour_id';
$adrress_stmt = $conn->prepare($sql);

$adrress_stmt->execute();
?>