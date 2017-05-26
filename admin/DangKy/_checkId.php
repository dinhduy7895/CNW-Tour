<?php
include('../connect/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'Select DangKy.*,KhachHang.Id,KhachHang.Name,tour.name '
            . 'from KhachHang,DangKy,tour  '
            . 'where KhachHang.Id = DangKy.khachHang_id and tour.id = DangKy.tour_id and  DangKy.id = " ' . $id . '"';
//     var_dump($sql);
//   exit();
    $stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$row) header ("Location: ../pages/examples/404.php");
} else
    header ("Location: ../pages/examples/404.php");