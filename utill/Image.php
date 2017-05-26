<?php
session_start();

include '../connect/connect.php';
define('root', "http://localhost/CNW/Tour");

class Image {

    function upload($file) {
        $target_dir = "../../uploads/";
        $target_file = $target_dir . basename($file["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (!move_uploaded_file($file["tmp_name"], $target_file))  {
                $_SESSION['mess'] = "Sorry, there was an error uploading your file.";
                header("location: index.php");
            }
            return false;
        }

        function getImage($image) {
            $link;
            if ($image) {
                $link = root . "/uploads/" . $image;
            } else
                $link = root . "/uploads/no-image.jpg";
            return $link;
        }
    }

        ?>

