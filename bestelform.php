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
  <a href="homepage.php">Home</a>
  <a href="Products.php">Products</a>
  <a href="contact.html">Contact</a>
  <a href="shoppingcart.php">Shopping Cart</a>
  <a href="Login.html" style="float:right">Login</a>
  <a href="Regristreren.html" style="float:right">Registreren</a>  
</div>

<div class="form">
  <h3>Gegevens</h3>

 
  <form action="bestelling_verwerken.php">
    <label for="Voornaam">Voornaam:</label><br>
    <input type="text" class="formelem" id="Voornaam" name="Voornaam" ><br>
    <label for="Achternaam">Achternaam:</label><br>
    <input type="text" class="formelem" id="Achternaam" name="Achternaam"><br>
    <label for="Straatnaam">Straatnaam:</label><br>
    <input type="text" class="formelem" id="Straatnaam" name="Straatnaam" ><br>
    <label for="Postcode">Postcode:</label><br>
    <input type="text" class="formelem" id="Postcode" name="Postcode"><br>
    <label for="Stad">Stad:</label><br>
    <input type="text" class="formelem" id="Stad" name="Stad"><br><br>
    <input type="submit" value="Bestel!">
  </form> 

</div>


<div class="footer">
    <p>Author: Tijmen Joacim<br>
    <a href="mailto:Tijmenfb@gmail.com">Tijmenfb@gmail.com</a><br>
    <a href="tel:+31618662437">06-18662437</a></p>
</div>

</body>
</html>