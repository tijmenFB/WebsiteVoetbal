


<h2>Producten</h2>

<div class="row">


<?php

// STAP 1A: DATABASECONNECTIE
include_once 'conect.php';
// STAP 1B: QUERY MAKEN
$vraag = "SELECT * FROM product";

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
    echo         '<p><a class="btn_add_to_cart" href="bekijk' . $id . '.php"?action=bekijk_product&Product_ID=' . $id . '"> '. $titel . '</a></p>';
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

