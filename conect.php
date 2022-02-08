<?php
$server = "localhost";
$gebruiker = "root";
$wachtwoordDB = "";
$database = "webshop";

$conn = new mysqli($server,$gebruiker,$wachtwoordDB,$database);
if ( $conn->connect_error )
{
   die( "Fout: ".$conn->connect_error );
}


?>