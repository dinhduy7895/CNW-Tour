<?php
session_start();
require_once './connect/connect.php';
include './utill/Class.tour.php';
include './utill/Class.address.php';
include './utill/Class.type.php';
include './utill/Image.php';
?>
<?php $title = 'News' ?>
<?php include 'inc/header.php'; ?>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 news-highlight">
                <?php
                $check = 0;
                if (isset($_GET['addressId'])) {
                    $list = Address::find($_GET['addressId']);
                    if ($list == false) {
                        $user->redirect('404.php');
                    }
                    $check = 1;
                    $category = $list->name;
                    $list = new Address($list);
                    $tours = $list->getTour();
                } else if (isset($_GET['typeId'])) {
                    $list = Type::find($_GET['typeId']);
                    if ($list == false) {
                        $user->redirect('404.php');
                    }
                    $category = $list->name;
                    $list = new Type($list);
                    $tours = $list->getTour();
                    $check = 1;
                } else if (isset($_GET['dayTour'])) {
                    $check = 1;
                    $tours = Tour::findByDay($_GET['dayTour']);
                    if ($tours == false) {
                        $user->redirect('404.php');
                    }
                    $category = $_GET['dayTour'] . " days";
                }
                if ($check == 0) {
                    include './_content.php';
                } else {
                    ?>

                    <div class="row center">
                        <div class="col-lg-12">
                            <div class="new-title-bar center">
                                <div class="title-bar">
                                    <span style="text-transform: uppercase;"><?php echo "TAG: " . $category; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        foreach ($tours as $tour) {
                            $tour = new Tour($tour);

                            $url = "tour.php?tourId=" . $tour->id;
                            $img = Image::getImage($tour->image);
                            ?>
                            <div class="new-single col-lg-12">
                                <div class="new-single-image">
                                    <a href="<?php echo $url; ?>">
                                        <img src="<?php echo $img; ?>" class="image-responsive" alt="">
                                    </a>
                                </div>
                                <div class="new-single-header">
                                    <h2 class="main-title">
                                        <a href="<?php echo $url; ?>" class=""><?php echo $tour->name; ?></a>
                                    </h2>
                                    <div class="time-new-single">
                                        <span class="price">FROM: <span><?php echo $tour->price->f1t2 . "$  "; ?></span> </span><br>  
                                        <i class="fa fa-clock-o"></i> <a href="news-page.php?dayTour=?<?php echo $tour->dayTour; ?>"><?php echo $tour->dayTour; ?> Days</a> &nbsp;&nbsp;
                                        <i class="fa fa-map-marker"></i>
                                        <?php
                                        $addressList = $tour->getAddress();
                                        foreach ($addressList as $address) {
                                            ?>
                                            <a href="news-page.php?addressId=<?php echo $address->id ?>"><?php echo $address->name . ", " ?></a>
                                        <?php } ?>


                                    </div>
                                    <div class="new-single-content">
                                        <?php echo $tour->info; ?>
                                    </div>
                                    <div class="new-single-more">
                                        <a href="<?php echo $url ?>">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                <?php } ?>

            </div>

            <?php include './inc/slide-right.php'; ?>         
            <?php include 'inc/footer.php'; ?>