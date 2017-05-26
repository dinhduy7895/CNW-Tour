 <div class="form-group field-user-username required">
        <label class="control-label" for="user-password">Address</label>
        <select id="select" class="form-control" name="address">
            <?php
            
            if (isset($id)) {
                
                $addressId[0] = $row['addressId'];
 
            }
            else{
                $addressId =[];
            }
            while ($row = $adrress_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
            <option value="<?php echo $row['id']; ?>" <?php echo (in_array($row['id'], $addressId)?"selected":""); ?>><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
        <div class="help-block"></div>
    </div>