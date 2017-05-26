 <div class="form-group field-user-username required">
        <label class="control-label" for="user-password">Tour</label>
        <select id="select" class="form-control" name="tourId">
            <?php
            
            if (isset($id)) {
                
                $tourId[0] = $row['tourId'];
 
            }
            else{
                $tourId =[];
            }
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
            <option value="<?php echo $row['id']; ?>" <?php echo (in_array($row['id'], $tourId)?"selected":""); ?>><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
        <div class="help-block"></div>
    </div>