<?php
$tourId = $row['id'];

$sql = "Select name from address where id in (select addressId from tour_address where tourId='" . $id . "')";

$stmt = $conn->prepare($sql);
$stmt->execute();
$addressNames = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
?>
<tr>
    <td>Address</td>
   
    <td>
        <?php  foreach ($addressNames as $addressName)
                echo $addressName."</br>"; 
        ?>
    
    </td>
</tr>

