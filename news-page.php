<?php

require_once './connect/connect.php';
session_start();
?>
<?php $title = 'News' ?>
<?php include 'inc/header.php'; ?>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 news-highlight">
                <div class="row center">
                    <div class="col-lg-12">
                        <div class="new-title-bar center">
                            <div class="title-bar">
                                <span>CATEGORY</span>



                            </div>
                        </div>
                    </div>
                    <div class="new-single col-lg-12">
                        <div class="new-single-image">
                            <a href="#">
                                <img src="http://pipsum.com/1200x400.jpg" class="image-responsive" alt="">
                            </a>
                        </div>
                        <div class="new-single-header">
                            <h2 class="main-title">
                                <a href="#" class="">Here is title</a>
                            </h2>
                            <div class="time-new-single">
                                <span>bla1<br></span>
                                <span>bla2</span>
                            </div>
                            <div class="new-single-content">
                                content
                            </div>
                            <div class="new-single-more">
                                <a href="#">continue reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 new-recent slide-right ">
                <h4 class="new-recent-title" style="margin-bottom: 1.5em;">
                    <span>RECENT SEARCH</span>
                </h4>
                <div class=" new-right">
                    <div id="block-views-recent-news-block" class="block block-views box_skin">
                        <div class="content">
                            <div class="view-recent-survey block clearfix center">
                                <div class="view-header">
                                    <h2>CatPulse</h2>
                                    <div class="menu-tag">
                                        <ul>
                                            <li><a href="#" class="menu-tag-item">dsdsdsd</a></li>
                                            <li><a href="#" class="menu-tag-item">dsdsdsd</a></li>
                                            <li><a href="#" class="menu-tag-item">dsdsdsd</a></li>
                                            <li><a href="#" class="menu-tag-item">dsdsdsd</a></li>
                                            <li><a href="#" class="menu-tag-item">dsdsdsd</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>