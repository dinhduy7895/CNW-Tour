<?php
include('../connect/connect.php');

if (isset($_GET['search'])) {
    $id = $_GET['id'];
    $day = $_GET['f1t2'];
    $name = $_GET['f3t5'];
    $level = $_GET['over5'];
    $sql = 'Select * from price where id LIKE "%'.$id.'%" and f1t2 LIKE "%' . $name . '%"   and f3t5 LIKE "%' . $id . '%" and over5 LIKE "%' . $level . '%"';
} else
    $sql = 'Select * from price ';
$stmtPrice = $conn->prepare($sql);

$stmtPrice->execute();
?>