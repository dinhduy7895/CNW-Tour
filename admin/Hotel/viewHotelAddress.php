<?php
$addressId = $row['addressId'];

$sql = "Select name from address where id ='" . $addressId . "'";

$stmt = $conn->prepare($sql);
$stmt->execute();
$addressNames = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
?>
<tr>
    <td>Address</td>
   
    <td>
        <?php  
                echo $addressNames[0]."</br>"; 
        ?>
    
    </td>
</tr>

