<?php
include('../connect/connect.php');

if (isset($_GET['search'])) {
    $id = $_GET['id'];
    $day = $_GET['day'];
    $name = $_GET['name'];
    $level = $_GET['level'];
    $info = $_GET['info'];
    $sql = 'Select * from hotel where  name LIKE "%' . $name . '%"   and id LIKE "%' . $id . '%" and level LIKE "%' . $level . '%"';
} else
    $sql = 'Select * from hotel ';
$stmtHotel = $conn->prepare($sql);

$stmtHotel->execute();
?>