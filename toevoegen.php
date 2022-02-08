<?php
$Product_Titel = $_POST['Ptitel'];
$Product_Prijs = $_POST['Pprijs']; 
$Product_Beschrijving = $_POST['Pbeschrijving'];

echo 'Product Titel = ' .$Product_Titel . '<br>';
echo 'Product Prijs = ' . $Product_Prijs . '<br>';
echo 'Product Beschrijving = ' . $Product_Beschrijving ;

include_once 'conect.php'; 

$vraag = "INSERT INTO product (Product_Titel, Product_Prijs, Product_Beschrijving)";
$vraag .= " VALUES ('".$Product_Titel."', '".$Product_Prijs."', '".$Product_Beschrijving."')"; 
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