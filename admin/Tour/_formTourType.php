 <div class="form-group field-user-username required">
        <label class="control-label" for="user-password">Type</label>
        <select id="select1" multiple="multiple" class="form-control" name="type[]">
            <?php
            
            if (isset($id)) {
                $stmt1 = $conn->prepare("Select typeId from tour_type where tourId='" . $id."'");
               
                $stmt1->execute();
                $typeId = $stmt1->fetchAll(PDO::FETCH_COLUMN,0);
 
            }
            else{
                $typeId =[];
            }
            while ($row = $stmtType->fetch(PDO::FETCH_ASSOC)) {
                ?>
            <option value="<?php echo $row['id']; ?>" <?php echo (in_array($row['id'], $typeId)?"selected":""); ?>><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
        <div class="help-block"></div>
    </div>