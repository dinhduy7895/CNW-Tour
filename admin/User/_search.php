<?php
include('../connect/connect.php');

if (isset($_GET['search'])) {
    $id = $_GET['id'];
    $username = $_GET['username'];
    $name = $_GET['name'];
    $created = $_GET['$created'];
    $sql = 'Select * from user where username LIKE "%' . $username . '%" and name LIKE "%' . $name . '%"  and created_at LIKE "%' . $created . '%"or id = " ' . $id . '"';
} else
    $sql = 'Select * from user ';
$stmt = $conn->prepare($sql);
$stmt->execute();
?>