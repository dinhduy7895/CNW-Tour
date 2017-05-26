<?php

$title = 'About';
?>
<?php

include './utill/Image.php';
include('functions/connect.php');
include "inc/header.php";
?>
<section id="main-content">
    <div class="container" >

        <div class="main-content ">
            <div class="about-title center">
                <h1>ABOUT US</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque odit voluptatum rem dolorum reprehenderit non fugit molestias ducimus nesciunt, aspernatur, nostrum illo! Tempora voluptate, corporis voluptatibus et ratione. Quis, ratione.</p>
            </div>
            <div class="information" >
                <div class="man col-lg-6  ">
                    <div class="ava">
                        <img src="uploads/duy.jpg" alt="duy" class="img-responsive" style="
                             height: 541px;
                             width: 433px;
                             ">
                    </div>
                    <div class="about-man center" style="float: left; margin-top: 1em;">
                        Dinh Van Duy
                    </div>
                </div>
                <div class="man col-lg-6 ">
                    <div class="ava">
                        <img src="uploads/tinh.jpg" alt="Tinh" class="img-responsive" style="
                             height: 541px;
                             width: 433px;
                             float: right;
                             ">
                    </div>
                    <div class="about-man " style="float: right; margin-top: 1em;">
                        Nguyen Thanh Tinh
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<?php include 'inc/footer.php'; ?>
