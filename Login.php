<?php
// gegevens ophalen
$email = $_GET['E-mail'];
$wachtwoord = $_GET['Wachtwoord'];

// database connectie
include 'conect.php';

// querry maken
$vraag = "SELECT Gebruiker_ID FROM gebruikers WHERE";
$vraag .= " Gebruiker_Email = '".$email."' AND ";
$vraag .= " Gebruiker_Password = '".$wachtwoord."' ";
$vraag .= "AND Medewerker = 0";

$resultaat = $conn->query($vraag);

session_start();
if ( $resultaat->num_rows > 0 )
{
   header('Location: products.php');
   // de combinatie gebruiker en wachtwoord bestaat
   $rij = $resultaat->fetch_assoc();   // één rij ophalen
   print_r($rij);
   $id = $rij['Gebruiker_ID'];  
   $_SESSION['Gebruiker_ID'] = $id;               
}
else
{
   echo "je combinatie klopt niet.";
   // de combinatie gebruiker en wachtwoord bestaat niet  
}


$vraagMedewerker = "SELECT Gebruiker_ID FROM gebruikers WHERE";
$vraagMedewerker .= " Gebruiker_Email = '".$email."' AND ";
$vraagMedewerker .= " Gebruiker_Password = '".$wachtwoord."' ";
$vraagMedewerker .= "AND Medewerker = 1";

$resultaatMedewerker = $conn->query($vraagMedewerker);

session_start();
if ( $resultaatMedewerker->num_rows > 0 )
{
   header('Location: formtoevoegen.php');
   // de combinatie gebruiker en wachtwoord bestaat
   $rij = $resultaatMedewerker->fetch_assoc();   // één rij ophalen
   print_r($rij);
   $id = $rij['Gebruiker_ID'];  
   $_SESSION['Gebruiker_ID'] = $id;               
}
else
{
   echo "je combinatie klopt niet.";
   // de combinatie gebruiker en wachtwoord bestaat niet  
}
?>
