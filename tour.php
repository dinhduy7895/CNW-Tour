<?php
// session_name('s');
// session_set_cookie_params(0, '/');
include('./connect/connect.php');
session_start();
include 'inc/header.php';

$_SESSION['login'] = "";
$title = "_title";
?>
<?php
if (isset($_POST['submit'])) {
    $uname = $_POST['Name'];
    $umail = $_POST['Name'];
    $upass = $_POST['pass'];
    $upass = md5($upass);

    if ($user->login($uname, $umail, $upass)) {
        $_SESSION['login'] = true;

        if ($uname == 'admin') {
            $user->redirect('../admin/news.php');
        } else
            $user->redirect('_url.php');
    }
    else {
        $error = "Wrong Details !fa";
    }
}
?>

<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 news-highlight">
                <div class="row center">
                    <div class="new-single col-lg-12">
                        <div class="new-single-image">
                            <a href="#">
                                <img src="http://pipsum.com/1200x400.jpg"   class="image-responsive" alt="">
                            </a>
                        </div>
                        <div class="new-single-header">
                            <div class="new-single-header-category">
                                <span><a href="#">News in Day</a></span>
                            </div>
                            <h2 class="main-title">
                                <a href="#" class="">_title</a>
                            </h2>
                            <div class="time-new-single">
                                <span>Published at _date <br></span>
                                <span>Upload by _user </span>
                            </div>
                            <div class="new-single-content">

                                <div class="context">
                                    _content
                                </div> 	
                            </div>
                        </div>
                        <div class="new-single-price">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>2 peoples</th>
                                        <th>3-5 Peoples</th>
                                        <th>Over 5 Peoples</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Price</th>
                                        <td>3 </td>
                                        <td> 4</td>
                                        <td>5 </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="new-single-register">
                            <form name="register" method="POST" enctype="multipart/form-data">
                                <div class="form-group field-user-username required">
                                    <label class="control-label">Hello Dinh Duy</label>
                                </div>
                                <div class="form-group field-user-username required">
                                    <label class="control-label">You want to choice this tour, right?</label>
                                </div>
                                <div class="form-group field-user-username required">
                                    <label class="control-label">Please tell me how many peoples will join with you on this tour ?</label>
                                    <input type="number"  class="form-control" name="number" maxlength="255" required="required" >
                                </div>
                                <div class="form-group field-user-username required">
                                    <label class="control-label">Do you have ant additional requirement?</label>
                                    <textarea class="form-control" name="requirement"  ></textarea>
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
<?php include './inc/footer.php'; ?>