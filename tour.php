<?php
include('./connect/connect.php');
session_start();
include './utill/Class.tour.php';
include './utill/Class.address.php';
include './utill/Class.type.php';
include './utill/Image.php';
include 'inc/header.php';


$title = "_title";
?>
<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    $idUser = $_SESSION['idUser'];
    $idTour = $_GET['tourId'];
    $require = $_POST['requirement'];
    
    if ($user->tour($idUser, $idTour, $number,$require)) {
      
            $user->redirect('success.php');
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
                <?php
                if (isset($_GET['tourId'])) {
                    $id = $_GET['tourId'];
                } else {
                    $user->redirect('404.php');
                }
                $tour = Tour::find($id);
               
                if($tour==false){
                    $user->redirect('404.php');
                }
                $tour = new Tour($tour);
                $url = "tour.php?tourId=" . $tour->id;
                
                $img = Image::getImage($tour->image);
                ?>
                <div class="row center">
                    <div class="new-single col-lg-12">
                        <div class="new-single-image">
                            <a href="#">
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
                        </div>
                        <div class="new-single-price" >
                            <table class="table table-bordered table-hover" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>1-2 peoples</th>
                                        <th>3-5 Peoples</th>
                                        <th>Over 5 Peoples</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Price</th>
                                        <td><?php echo $tour->price->f1t2; ?> </td>
                                        <td><?php echo $tour->price->f3t5 ;?></td>
                                        <td><?php echo $tour->price->over5 ;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="new-single-register">
                            
                            <?php 
                                echo $error;
                                if(!isset($_SESSION['user_session'])){
                                    echo"vui long Dang nhap de thuc hien Dang Ky";
                                }
                                else{
                            ?>
                            <form name="register" method="POST" enctype="multipart/form-data">
                                <div class="form-group field-user-username required">
                                    <label class="control-label">Hello <?php echo $_SESSION['user_session']; ?></label>
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
                                 <div class="form-group field-user-username required">
                                     <input type="submit"  style="padding: 0;" class="btn form-control" name="submit" maxlength="255" value="Send" required="required" >
                                </div>
                            </form>
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
<?php include './inc/slide-right.php'; ?>         
<?php include './inc/footer.php'; ?>