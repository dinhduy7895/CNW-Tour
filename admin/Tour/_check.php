<?php
include '../connect/connect.php';

include '../../utill/Image.php';
if (isset($_POST['create'])) {
    
    //Create record for Tour table
    $day = $_POST['day'];
    $info = $_POST['info'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $image = $_FILES['image']['name'];
    $types = $_POST['type'];
    Image::upload($_FILES['image']);
     
    $create_at = new DateTime();
    $create_at = $create_at->format('Y-m-d H:i:s');
    $update_at = $create_at;
    
    $stmt1 = $conn->prepare("INSERT INTO tour (name,dayTour,info,image,created_at,updated_at) VALUES (:name,:day,:info,:image,:create,:update)");
    $stmt1->bindparam(":name", $name);
    $stmt1->bindparam(":day", $day);
    $stmt1->bindparam(":info", $info);
    $stmt1->bindparam(":image", $image);
    $stmt1->bindparam(":create", $create_at);
    $stmt1->bindparam(":update", $update_at);
    $stmt1->execute();
    //Create Record for tor_address table
    $last_id = $conn->lastInsertId();
    foreach ($address as $key => $value) {
        $stmt1 = $conn->prepare("INSERT INTO tour_address (tourId,addressId) VALUES (:tourId,:addressId)");
        $stmt1->bindparam(":tourId", $last_id);
        $stmt1->bindparam(":addressId", $value);
        $stmt1->execute();
    }
      //creat tour_type
     
    foreach ($types as $key => $value) {
        $stmt1 = $conn->prepare("INSERT INTO tour_type (tourId,typeId) VALUES (:tourId,:typeId)");
        $stmt1->bindparam(":tourId", $last_id);
        $stmt1->bindparam(":typeId", $value);
        $stmt1->execute();
    }
    if ($stmt1) {
        $_SESSION['mess'] = 'Bạn đã tạo mới thành công';
        header("location: index.php");
    } else {
        $_SESSION['mess'] = 'Input bạn nhập không hợp lệ';
        header("location: create.php?mess=inputInvalid");
    }
} else if (isset($_POST['update'])) {
    //create Update for tour Table
    
    $day = $_POST['day'];
    $info = $_POST['info'];
    $name = $_POST['name'];
    $id = $_GET['id'];
    $address = $_POST['address'];
    if(isset($_FILES['image'])){
         $image = $_FILES['image']['name'];
         Image::upload($_FILES['image']);
    }
    else{
        $image = $_POST['image'];
    }
    $types = $_POST['type'];
    
    $update_at = new DateTime();
    $update_at = $update_at->format('Y-m-d H:i:s');
   
    
    $stmt1 = $conn->prepare("UPDATE tour SET name=:name, dayTour=:day,info=:info,image=:image,updated_at=:update where id=:id");
    $stmt1->bindparam(":day", $day);
    $stmt1->bindparam(":info", $info);
    $stmt1->bindparam(":image", $image);
    $stmt1->bindparam(":name", $name);
    $stmt1->bindparam(":update", $update_at);
    $stmt1->bindparam(":id", $id);
//    var_dump($stmt1);
//    exit();
    $stmt1->execute();
     
    //Delete old record tour_address to update 
    $stmt1 = $conn->prepare("DELETE from tour_address where tourId=:tourId");
    $stmt1->bindparam(":tourId", $id);
    $stmt1->execute();
    //Update new record tour_address table
    foreach ($address as $key => $value) {
        $stmt1 = $conn->prepare("INSERT INTO tour_address (tourId,addressId) VALUES (:tourId,:addressId)");
        $stmt1->bindparam(":tourId", $id);
        $stmt1->bindparam(":addressId", $value);
        $stmt1->execute();
    }
     //Delete old record tour_type to update 
    $stmt1 = $conn->prepare("DELETE from tour_type where tourId=:tourId");
    $stmt1->bindparam(":tourId", $id);
    $stmt1->execute();
    //Update new record tour_address table
    foreach ($types as $key => $value) {
        $stmt1 = $conn->prepare("INSERT INTO tour_type (tourId,typeId) VALUES (:tourId,:typeId)");
        $stmt1->bindparam(":tourId", $id);
        $stmt1->bindparam(":typeId", $value);
        $stmt1->execute();
    }
    if ($stmt1) {
        $_SESSION['mess'] = 'Bạn đã cập nhập thành công';
        header("location: index.php");
    } else {
        $_SESSION['mess'] = 'Input bạn nhập không hợp lệ';
        header('Location: update.php?id=' . $id);
    }
} else {
    header('Location: create.php');
}
?>
