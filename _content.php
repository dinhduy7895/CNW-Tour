<?php
    $types = Type::findAll();
    foreach ($types as $type ){
        $type = new Type($type);
        $tours = $type->getTour();
 ?> 
<div class="row center">
    <div class="col-lg-12">
        <div class="new-title-bar center">
            <div class="title-bar">
                <span style="text-transform: uppercase;">CATEGORY: <?php echo $type->name; ?></span>
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
                <i class="fa fa-clock-o"></i> <a href="news-page.php?dayTour=<?php echo $tour->dayTour; ?>"><?php echo $tour->dayTour; ?> Days</a> &nbsp;&nbsp;
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
    <?php } ?>
</div>
<?php  }
?>