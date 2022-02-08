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
  <a href="Login.html" style="float:right">Login</a>
  <a href="Regristreren.html" style="float:right">Registreren</a>  
</div>

<div class="koptekst">
  <h1> de website met een ruim assortiment als het om voetballen gaat.</h1>
</div>






<div class="row">
  <form action="homepage.php">
  <?php
  include "product.php"
  ?>
  </from>
</div>

<div class="productlink">
  <h2>Voor meer producten <a href="Products.php">klik hier!</a></h2>
</div>

<div class="footer">
  <p>Author: Tijmen Joacim<br>
  <a href="mailto:Tijmenfb@gmail.com">Tijmenfb@gmail.com</a><br>
  <a href="tel:+31618662437">06-18662437</a></p>
</div>

</body>
</html>