<?php

if (isset($_GET['search'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $sdt = $_GET['sdt'];
    $sql = 'Select * from KhachHang where Name LIKE "%' . $name . '%" and Email LIKE "%' . $email . '%"  '
            . 'and FirstName LIKE "%' . $fname . '%"  and LastName LIKE "%' . $lname . '%"  '
            . 'and PhoneNumber LIKE "%' . $sdt . '%"  or id = " ' . $id . '"';
} else
    $sql = 'Select * from KhachHang ';
$stmt = $conn->prepare($sql);
$stmt->execute();
?>