<?php
include('../connect/connect.php');

if (isset($_GET['search'])) {
    $id = $_GET['id'];
    $day = $_GET['day'];
    $name = $_GET['name'];
    $info = $_GET['info'];
    $sql = 'Select * from type where  name LIKE "%' . $name . '%"   and id LIKE "%' . $id . '%"';
} else
    $sql = 'Select * from type ';
$stmtType = $conn->prepare($sql);

$stmtType->execute();
?>