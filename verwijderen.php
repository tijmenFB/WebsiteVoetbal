<?php
$Product_Titel = $_POST['Ptitel'];




include_once 'conect.php'; 

$vraag = "DELETE FROM product WHERE Product_Titel = '$Product_Titel'";
 
print ($vraag);
header('location: Products.php');
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  else {
    $result = $conn->query($vraag);
  }
?>