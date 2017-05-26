<?php

include("../connect/connect.php");

if (isset($_POST['create'])) {
    $tourId = $_POST['tourId'];
    $f1t2 = $_POST['f1t2'];
    $f3t5 = $_POST['f3t5'];
    $over5 = $_POST['over5'];
    $create_at = new DateTime();
    $create_at = $create_at->format('Y-m-d H:i:s');
    $update_at = $create_at;
    $stmt1 = $conn->prepare("INSERT INTO price (tourId,f1t2,f3t5,over5,created_at,updated_at) VALUES (:tourId,:f1t2,:f3t5,:over5,:create,:update)");
    
    $stmt1->bindparam(":tourId", $tourId);
    $stmt1->bindparam(":f1t2", $f1t2);
    $stmt1->bindparam(":f3t5", $f3t5);
    $stmt1->bindparam(":over5", $over5);
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
    $tourId = $_POST['tourId'];
    $f1t2 = $_POST['f1t2'];
    $f3t5 = $_POST['f3t5'];
    $over5 = $_POST['over5'];
    $id = $_GET['id'];
    

    $update_at = new DateTime();
    $update_at = $update_at->format('Y-m-d H:i:s');
    $stmt1 = $conn->prepare("UPDATE price SET tourId=:tourId,f1t2=:f1t2,f3t5=:f3t5,over5=:over5,updated_at=:update where id=:id");

    $stmt1->bindparam(":tourId", $tourId);
    $stmt1->bindparam(":f1t2", $f1t2);
    $stmt1->bindparam(":f3t5", $f3t5);
    $stmt1->bindparam(":over5", $over5);
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
