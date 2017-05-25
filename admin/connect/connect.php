<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "yii2_tour";
//include './utill/Class.user.php';
try{
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // $user = new USER($conn);
    
}
catch(PDOException $e)
    {
    echo  $e->getMessage();
    }

?>
 
