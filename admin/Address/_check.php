<?php

include("../connect/connect.php");

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $create_at = new DateTime();
    $create_at = $create_at->format('Y-m-d H:i:s');
    $update_at = $create_at;
    $stmt1 = $conn->prepare("INSERT INTO address (name,created_at,updated_at) VALUES (:name,:create,:update)");
    
    $stmt1->bindparam(":name", $name);
    $stmt1->bindparam(":create", $create_at);
    $stmt1->bindparam(":update", $update_at);
    
    $stmt1->execute();
    $last_id = $conn->lastInsertId();
       
    if ($stmt1) {
        $_SESSION['mess'] = 'Bạn đã tạo mới thành công';
        header("location: index.php");
    } else {
        $_SESSION['mess'] = 'Input bạn nhập không hợp lệ';
        header("location: create.php?mess=inputInvalid");
    }
} else if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $id = $_GET['id'];
    

    $update_at = new DateTime();
    $update_at = $update_at->format('Y-m-d H:i:s');
    $stmt1 = $conn->prepare("UPDATE address SET name=:name,updated_at=:update where id=:id");

    $stmt1->bindparam(":name", $name);
    $stmt1->bindparam(":update", $update_at);
    $stmt1->bindparam(":id", $id);
   
    $stmt1->execute();

    if ($stmt1) {
        $_SESSION['mess'] = 'Bạn đã tạo mới thành công';
        header("location: index.php");
    } else {
        $_SESSION['mess'] = 'Input bạn nhập không hợp lệ';
        header('Location: update.php?id=' . $id);
    }
} else {
    header('Location: create.php');
}
?>
