<?php
$title = 'Home';
require_once './connect/connect.php';
include './utill/Class.tour.php';
include './utill/Class.address.php';
include './utill/Class.type.php';
include './utill/Image.php';
include './inc/header.php';
?>

<section id="slider" class="slider">
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active single-slider">
                <img src="./uploads/biker.jpg" alt="Chania" class=" img-responsive img-100" style="width: 100%;height: 600px;">
                <div class="carousel-caption">
                    <h3>BIKER</h3>
                    <div class="banner-content">
                        <p>Enjoy the tour with BIKER<br> is the best thing</p>
                        <p>Make it become the best<br>and brightest of your tour</p>
                    </div>
                    <h3><a class="read" href="news-page.php?typeId=5">READ MORE</a></h3>
                </div>
            </div>
            <div class="item single-slider">
                <img src="./uploads/moto.jpg" alt="Chania" class=" img-responsive img-100" style="width: 100%;height: 600px;">
                <div class="carousel-caption">
                    <h3>MOTO</h3>
                    <div class="banner-content">
                         <p>Enjoy the tour with MOTO<br> is the best thing</p>
                        <p>Make it become the best<br>and brightest of your tour</p>
                    </div>
                    <h3><a class="read" href="news-page.php?typeId=6">READ MORE</a></h3>
                </div>
            </div>
            <div class="item single-slider">
                <img src="./uploads/hiking.jpg" alt="Chania" class=" img-responsive img-100" style="width: 100%;height: 600px;">
                <div class="carousel-caption">
                    <h3>HIKING</h3>
                    <div class="banner-content">
                         <p>Enjoy the tour with HIKING<br> is the best thing</p>
                        <p>Make it become the best<br>and brightest of your tour</p>
                    </div>
                    <h3><a class="read" href="news-page.php?typeId=8">READ MORE</a></h3>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="news">
    <div class="container">
        <div class="col-lg-12 views-field-title"> <span class="title-content">In The News</span> </div>
        <div class="col-lg-8 news-content">
            <?php
            $stmt = $conn->prepare("SELECT * from tour Order by id Desc limit 3");
            $stmt->execute();
            $tours = $stmt->fetchAll(PDO::FETCH_CLASS);
            foreach ($tours as $tour) {
                $tour = new Tour($tour);
                $url = "tour.php?tourId=" . $tour->id;
                $img = Image::getImage($tour->image);
                ?>
                <div class="col-lg-12 col-md-12 new-left">
                    <div class="view-content">
                        <div class="views-row ">
                            <div class="views-field-field-picture">
                                <div class="field-content"><a href="<?php echo $url; ?>" class="title-dr"><img typeof="foaf:Image" src="<?php echo $img; ?>" width="940" height="626" alt="" /></a>
                                </div>
                                <div class="back-ground-title"></div>
                                <div class="views-field-field-headline">
                                    <div class="field-content center "><a href="<?php echo $url; ?>" class="title-dr"><?php echo $tour->name; ?></a></div>
                                </div>
                            </div>

                            <div class="views-field-field-more-link-1">
                                <div class="field-content red-link"><a href="<?php echo $url; ?>" target="_blank">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>   
      
<?php include './inc/slide-right.php'; ?>         
<?php include 'inc/footer.php'; ?>