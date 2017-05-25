<?php

include('../connect/connect.php');


if (isset($_POST['create'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $rePass = $_POST['rePass'];
    $name = $_POST['name'];
    $reset = null;
    
    if ($pass != $rePass) {
        $_SESSION['mess'] = "Password cua bạn nhập không khớp' ";
        header('Location: create.php');
    } else {
        $sql = "SELECT * FROM user WHERE username=:Name";
        $stmt = $conn->prepare($sql);
        $stmt->bindparam(":Name", $username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() == 0) {
            $create_at = new DateTime();
            $create_at = $create_at->format('Y-m-d H:i:s');
            $update_at = $create_at;

            $stmt1 = $conn->prepare("INSERT INTO user(username, name, password,password_reset_token,created_at,updated_at) VALUES (:username,:name,:password,:reset,:create,:update)");

            $stmt1->bindparam(":username", $username);
            $stmt1->bindparam(":password", $pass);
            $stmt1->bindparam(":name", $name);
            $stmt1->bindparam(":reset", $reset);
            $stmt1->bindparam(":create", $create_at);
            $stmt1->bindparam(":update", $update_at);

            $stmt1->execute();
            if ($stmt1) {
                $_SESSION['mess'] = 'Bạn đã tạo mới thành công';
                header("location: index.php");
            } else {
                $_SESSION['mess'] = 'Input bạn nhập không hợp lệ';
                header("location: create.php?mess=inputInvalid");
            }
        } else if ($stmt->rowCount() > 0) {
            $_SESSION['mess'] = 'Username bạn nhập đã tồn tại';
            header('Location: create.php');
        }
    }
} else if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $rePass = $_POST['rePass'];
    $name = $_POST['name'];
    $id = $_GET['id'];
    if ($pass != $rePass) {
        $_SESSION['mess'] = "Password cua bạn nhập không khớp' ";
        header('Location: update.php?id=' . $id);
    } else {
        $sql = "SELECT * FROM user WHERE username=:Name";
        $stmt = $conn->prepare($sql);
        $stmt->bindparam(":Name", $username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() == 0) {
            $update_at = new DateTime();
            $update_at = $update_at->format('Y-m-d H:i:s');
            $stmt1 = $conn->prepare("UPDATE user SET username=:username,password=:password,name=:name,updated_at=:update where id=:id");
            $stmt1->bindparam(":username", $username);
            $stmt1->bindparam(":password", $pass);
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
        } else if ($stmt->rowCount() > 0) {
            $_SESSION['mess'] = 'Username bạn nhập đã tồn tại';
            header('Location: update.php?id=' . $id);
        }
    }
}
else {
    header('Location: create.php');
}
?>
