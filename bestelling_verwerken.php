<?php
session_start();
// gegevens ophalen
$voornaam = $_GET['Voornaam'];
$achternaam = $_GET['Achternaam'];
$straatnaam = $_GET['Straatnaam'];
$postcode = $_GET['Postcode'];
$stad = $_GET['Stad'];
$Bestelling_datum = date("Y-m-d H:i:s");


// database connectie
include 'conect.php';

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  else 
  {
      $vraag = "INSERT INTO Bestellingen (Vnaam, Anaam, Adress, Postcode, Stad, datum)";
      $vraag .= " VALUES ('".$voornaam."', '".$achternaam."', '".$straatnaam."', '".$postcode."','".$stad."','".$Bestelling_datum."')";
      
      
      $laatste_insert = $conn->insert_id;
      //....................................................
      if ($conn->query($vraag) === TRUE) {
          $last_id = $conn->insert_id;
          
          foreach ($_SESSION['cart']['items'] as $item) {
            

          $id = $_SESSION['Gebruiker_ID'];
          $bestelling_id = $last_id;
          $product_id = '2';
          $aantal = $item['aantal'];
          var_dump($_SESSION['Gebruiker_ID']);
          

            $vraag2 = "INSERT INTO bestelling_klant (id, bestelling_id, product_id, aantal)";
            $vraag2 .= " VALUES ('".$id."','".$bestelling_id."','".$product_id."','".$aantal."')";
           
            var_dump($vraag2);
            

          if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
          }
          else {
            $result = $conn->query($vraag2);
            header('location: homepage.php');
          }

          
          }
      }
  }
?>