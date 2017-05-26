<?php
$tourId = $row['id'];

$sql = "Select name from type where id in (select typeId from tour_type where tourId='" . $id . "')";

$stmt = $conn->prepare($sql);
$stmt->execute();
$typeNames = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
?>
<tr>
    <td>Type</td>
   
    <td>
        <?php  foreach ($typeNames as $typeName)
                echo $typeName."</br>"; 
        ?>
    
    </td>
</tr>

