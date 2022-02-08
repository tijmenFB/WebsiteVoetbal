<?php
$email = $_GET['E-mail'];
$wachtwoord1 = $_GET['Wachtwoord'];
$wachtwoord2 = $_GET['Wachtwoord2'];
include 'conect.php';

if($wachtwoord1 == $wachtwoord2){
$vraag = "INSERT INTO gebruikers (Gebruiker_Email, Gebruiker_Password)";
$vraag .= " VALUES ('".$email."', '".$wachtwoord1."')"; 
print ($vraag);
header('location: homepage.html');
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

  $result = $conn->query($vraag);
} else
    {
         print "je wachtwoorden komen niet overeen <br>";
         print "probeer het nog een keer";
    }
?>