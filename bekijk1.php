<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="website.css">
    <link rel="stylesheet" href="shoppingcard.css">
</head>
<body>

<div class="header">
  <h1>Ballieman</h1>
  <h3>Voor al je voetballen.</h3>
</div>

<div class="topnav">
  <a href="homepage.php" class="active">Home</a>
  <a href="Products.php">Products</a>
  <a href="contact.html">Contact</a>
  <a href="shoppingcart.php">Shopping Cart</a>
  <a href="formtoevoegen.php">Product toevoegen</a>
  <a href="Login.html" style="float:right">Login</a>
  <a href="Regristreren.html" style="float:right">Registreren</a>  
</div>


<?php

// STAP 1A: DATABASECONNECTIE
include_once 'conect.php';
// STAP 1B: QUERY MAKEN
$vraag = "SELECT * FROM product WHERE Product_ID = '1'";

// var_dump($vraag); //querry testen

$resultaat = $conn->query($vraag);

//var_dump($resultaat);

if ( $resultaat->num_rows > 0 )
{
    while ($rij = $resultaat->fetch_assoc() )
    {         

   $id = $rij['Product_ID'];                       // dan de gewenste
   $titel = $rij['Product_Titel'];                 // kolommen ophalen
   $prijs = $rij['Product_Prijs'];
   $omschrijving = $rij['Product_Beschrijving'];
    echo '<div class="column">';
    echo    '<div class="card">';
    echo        '<img src="images/voetbal' . $id . '.jpg" alt="voetbal1" style="width:100%; height: 270px;">';
    echo         '<p><a> '. $titel . '</a></p>';
    echo        '<p class="price">$' . $prijs . '</p>';    
    echo        '<p><a class="btn_add_to_cart" href="shoppingcart.php?action=add_to_cart&Product_ID='. $id . '">Toevoegen aan winkelmandje</a></p>';
    echo    '</div>';
    echo  '</div>';

    }
}
else
{
   // er zijn geen rijen teruggekomen, er zijn geen producten
   print "rij niet gevonden";
}



?>

<div class="tekst">
    <a> Voetballen zijn er niet alleen in verschillende soorten, maar ook in verschillende maten. </a></br>
    <a> Een zaalvoetbal is doorgaans een maatje kleiner (maat 4) dan een voetbal die op het veld wordt gebruikt (maat 5), </a> </br>
    <a> al wordt bij zaalvoetbal soms ook wel met maat 5 gespeeld. </a></br>
    <a> deze bal is goed voor allebei! </a>
</div>