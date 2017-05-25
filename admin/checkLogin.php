<?php

include('../connect/connect.php');
session_start();
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username=:Name AND password=:Pass";

    $stmt = $conn->prepare($sql);
    $stmt->bindparam(":Name", $username);
    $stmt->bindparam(":Pass", $pass);

    $stmt->execute();
   
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$stmt) {
        header('Location: login.php?mess="Input khong hop le"');
    }

    if ($stmt->rowCount() == 0) {
        header('Location: login.php?mess="username hoac mat khau khong dung"');
    } else if ($stmt->rowCount() > 0) {
        $_SESSION['user'] = $row['name'];
       
        header('Location: index.php');
    }
} else if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $rePass = $_POST['rePass'];
    $name = $_POST['name'];
    $reset = null;
    if ($pass != $rePass)
        header('Location: login.php?mess="Password khong khop"');
    else {
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
                $_SESSION['user'] = $name;
                header("location: index.php");
            } else {
                header("location: login.php?mess='input khong hop le'");
            }
        } else if ($stmt->rowCount() > 0) {
            header('Location: login.php?mess="Username da ton tai"');
        }
    }
} else {
    header('Location: login.php');
}
?>

