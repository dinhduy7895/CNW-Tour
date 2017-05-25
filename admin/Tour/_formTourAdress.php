 <div class="form-group field-user-username required">
        <label class="control-label" for="user-password">Address</label>
        <select id="select" multiple="multiple" class="form-control" name="address[]">
            <?php
            
            if (isset($id)) {
                $stmt1 = $conn->prepare("Select addressId from tour_address where tourId='" . $id."'");
               
                $stmt1->execute();
                $addressId = $stmt1->fetchAll(PDO::FETCH_COLUMN,0);
 
            }
            else {
                $addressId=[];
            }
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
            <option value="<?php echo $row['id']; ?>" <?php echo (in_array($row['id'], $addressId)?"selected":""); ?>><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
        <div class="help-block"></div>
    </div>