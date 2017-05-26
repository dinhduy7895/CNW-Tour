<?php

include('../connect/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'Select * from KhachHang where id = " ' . $id . '"';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$row)
        header("Location: ../pages/examples/404.php");
    else {
        $sql = 'Delete  from KhachHang where id =  ' . $id . '';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $_SESSION['mess'] = "Bạn đã xóa thành công";
        header("Location: index.php");
    }
} else
    header("Location: ../pages/examples/404.php");