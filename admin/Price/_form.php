<?php
require '../Tour/_search.php';
?>
<form action="_check.php<?php echo isset($id) ? '?id=' . $id : ''; ?>" method="post">
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
        <label class="control-label" for="user-username" >From 1 to 2</label>
        <input type="number" id="user-username" class="form-control" name="f1t2" maxlength="255" required="required" value='<?php echo isset($row) ? $row['f1t2'] : ''; ?>'>

        <div class="help-block"></div>
    </div>
    <div class="form-group field-user-username required">
        <label class="control-label" for="user-username" >From 3 to 5</label>
        <input type="number" id="user-username" class="form-control" name="f3t5" maxlength="255" required="required" value='<?php echo isset($row) ? $row['f3t5'] : ''; ?>'>

        <div class="help-block"></div>
    </div>
    <div class="form-group field-user-username required">
        <label class="control-label" for="user-username" >Over 5</label>
        <input type="number" id="user-username" class="form-control" name="over5" maxlength="255" required="required" value='<?php echo isset($row) ? $row['over5'] : ''; ?>'>

        <div class="help-block"></div>
    </div>
    <?php include './_formTour.php'; ?>
    <div class="form-group">
        <button type="submit" class="btn btn-success" name='<?php echo isset($id) ? 'update' : 'create'; ?>'><?php echo isset($id) ? 'Update' : 'Create'; ?></button>    
    </div>
</form>