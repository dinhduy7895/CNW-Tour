<?php
$tourId = $row['tourId'];

$sql = "Select name from tour where id ='" . $tourId . "'";

$stmt = $conn->prepare($sql);
$stmt->execute();
$addressNames = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);
?>
   
    
    <?php  
            echo $addressNames[0]."</br>"; 
    ?>
    
 

