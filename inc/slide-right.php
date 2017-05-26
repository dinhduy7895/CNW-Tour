<div class="col-lg-4 col-md-4 slide-right">
                <h4 class="new-recent-title" style="margin-bottom: 1.5em;">
                    <span>RECENT SEARCH</span>
                </h4>
                <div class="new-right">
                    <div id="block-views-recent-news-block" class="block block-views box_skin">
                        <div class="content">
                            <div class="view-recent-survey block clearfix center">
                                <div class="view-header">
                                    <h2>Destination</h2>
                                    <div class="menu-tag">
                                        <ul>
                                            <?php
                                            $addressList = Address::findAll();
                                            rsort($addressList);
                                            $count=0;
                                            foreach ($addressList as $address) {
                                                $count++;
                                                if($count>5) break;
                                                ?>
                                                <li><a href="news-page.php?addressId=<?php echo $address->id; ?>" class="menu-tag-item"><?php echo $address->name; ?></a></li>
<?php } ?>

                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=" new-right">
                    <div id="block-views-recent-news-block" class="block block-views box_skin">
                        <div class="content">
                            <div class="view-recent-survey block clearfix center">
                                <div class="view-header">
                                    <h2>Type</h2>
                                    <div class="menu-tag">
                                        <ul>
                                            <?php
                                            $typeList = Type::findAll();
                                            rsort($typeList);
                                            $count=0;
                                            foreach ($typeList as $type) {
                                                $count++;
                                                if($count>5) break;
                                                ?>
                                                <li><a href="news-page.php?typeId=<?php echo $type->id; ?>" class="menu-tag-item"><?php echo $type->name; ?></a></li>
<?php } ?>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class=" new-right">
                    <div id="block-views-recent-news-block" class="block block-views box_skin">
                        <div class="content">
                            <div class="view-recent-survey block clearfix center">
                                <div class="view-header">
                                    <h2>DayTour</h2>
                                    <div class="menu-tag">
                                        <ul>
                                            <?php
                                            $tours = Tour::findAll();
                                            rsort($tours);
                                            $count=0;
                                            foreach ($tours as $tour) {
                                                $count++;
                                                if($count>5) break;
                                                ?>
                                                <li><a href="news-page.php?dayTour=<?php echo $tour->dayTour; ?>" class="menu-tag-item"><?php echo $tour->dayTour; ?> days</a></li>
<?php } ?>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</section>