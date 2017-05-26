<?php
include('../connect/connect.php');

if (isset($_GET['search'])) {
  
    $id = $_GET['id'];
    $day = $_GET['day'];
    $name = $_GET['name'];
    $info = $_GET['info'];
    $sql = 'Select * from tour where dayTour LIKE "%' . $day . '%" and name LIKE "%' . $name . '%"  and info LIKE "%' . $info . '%" and id LIKE "%' . $id . '%"';
} else
    
    $sql = 'Select * from tour ';
$stmt = $conn->prepare($sql);

$stmt->execute();

?>