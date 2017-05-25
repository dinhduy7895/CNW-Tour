<?php
include('../../connect/connect.php');

if (isset($_GET['search'])) {
    $id = $_GET['id'];
    $day = $_GET['day'];
    $name = $_GET['name'];
    $info = $_GET['info'];
    $sql = 'Select * from address where  name LIKE "%' . $name . '%"   and id LIKE "%' . $id . '%"';
} else
    $sql = 'Select * from address ';
$stmt = $conn->prepare($sql);

$stmt->execute();
?>