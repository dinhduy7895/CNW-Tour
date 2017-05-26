<?php
include('../connect/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = 'Select * from type where id = " ' . $id . '"';
    $stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$row) header ("Location: ../pages/examples/404.php");
} else
    header ("Location: ../pages/examples/404.php");