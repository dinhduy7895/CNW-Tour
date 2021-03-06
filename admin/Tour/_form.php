<?php
require '../Address/_search.php';
require '../Type/_search.php';
include '../../utill/Image.php';
?>
<form action="_check.php<?php echo isset($id) ? '?id=' . $id : ''; ?>" method="post" enctype="multipart/form-data">
    <?php if (isset($_SESSION['mess'])) { ?>
        <div class="search alert alert-danger">
            <a class="close" href="#">&times;</a>
            <p><strong>ERROR!!! </strong><?php echo $_SESSION['mess']; ?></p>
        </div>
        <?php
        unset($_SESSION['mess']);
    }
    ?>
    <div class="form-group field-user-username required">
        <label class="control-label" for="user-username" >Name</label>
        <input type="text" id="user-username" class="form-control" name="name" maxlength="255" required="required" value='<?php echo isset($row) ? $row['name'] : ''; ?>'>

        <div class="help-block"></div>
    </div>

    <div class="form-group field-user-username required">
        <label class="control-label" for="user-name">Days</label>
        <input type="number" id="user-name" class="form-control" name="day" maxlength="255" required="required" value='<?php echo isset($row) ? $row['dayTour'] : ''; ?>'>

        <div class="help-block"></div>
    </div>
    <div class="form-group field-user-username required">
        <label class="control-label" for="user-password">Info</label>
        <textarea  id="user-password" class="form-control" name="info" maxlength="255" required="required" value='<?php echo isset($row) ? $row['info'] : ''; ?>'>
        </textarea>
        <div class="help-block"></div>
    </div>
    <div class="s form-group">
            <label class="control-label templatemo-block">Image</label> 
     <?php
        if(isset($row)){
           
     ?>
            <img src="<?php echo Image::getImage($row['image']); ?>" style="width: 300px; height: 300px;">
        <?php }?>
    <input type="file" name="image" id="image" >
            								
    </div>
    <?php include './_formTourAdress.php'; ?>
    <?php include './_formTourType.php'; ?>

    
    <div class="form-group">
        <button type="submit" class="btn btn-success" name='<?php echo isset($id) ? 'update' : 'create'; ?>'><?php echo isset($id) ? 'Update' : 'Create'; ?></button>    
    </div>
</form>