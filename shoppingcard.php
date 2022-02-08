<?php
session_start();

if(!isset($_SESSION['cart']['items'])){
    $_SESSION['cart']['items'] = array();
    }


 if(!empty($_GET)){
     if (isset($_GET['action'])){
         $action = $_GET['action'];
     } else {
         $action = '';
     }

     if (isset($_GET['Product_ID'])){
        $Product_ID = $_GET['Product_ID'];
    } else {
        $Product_ID = '';
    }

  
     
     switch($action){
         case 'add_to_cart':
            
                // STAP 1A: DATABASECONNECTIE
                include_once 'conect.php';
            // STAP 1B: QUERY MAKEN
            $vraag = "SELECT * FROM product WHERE Product_ID = " . $Product_ID;
            $resultaat = $conn->query($vraag);

            

            if ( $resultaat->num_rows > 0 )
            {
                $rij = $resultaat->fetch_assoc();  
                    
            }    

            if (!isset($_SESSION['cart']['items'][$Product_ID])){
                $_SESSION['cart']['items'][$Product_ID] = array(
                    'id' => $rij['Product_ID'],
                    'titel' => $rij['Product_Titel'],
                    'prijs' => $rij['Product_Prijs'],
                    'aantal' => 1
                );
            } else {
                $_SESSION['cart']['items'][$Product_ID]['aantal'] ++;
            }
          



            break;
         
         case 'empty_cart':
            session_unset();
            print 'Cart Empty';
            $_SESSION['cart']['items'] = array();
            break;

        case 'empty_bestellingPlaatsen':
                session_unset();
                print 'De bestelling is geplaatst!';
                $_SESSION['cart']['items'] = array();                
                break;
         default:
            print 'no action required';       
     }
 }
?>

<?php if(!empty($_SESSION['cart']['items'])){ 
$totaal_aantal = 0;
$totaal_prijs = 0;
?>

<h3> Shopping card <h3>
<a id="btn-empty" href="shoppingcart.php?action=empty_cart">Empty Cart</a> 

<table class="tbl-cart" cellpadding="10" cellspacing="0">
    <tbody>
        <tr>
            <th style="text-align:left;">Name</th>
            <th style="text-align:right;" witdh="20%">Quantity</th>
            <th style="text-align:right;" witdh="20%">Unit Price</th>
            <th style="text-align:right;" witdh="20%">Price</th>
</tr>

<?php foreach ($_SESSION['cart']['items'] as $item){ ?>
</tr>
    <td>
        <img src="images/voetbal<?php echo $item['id'] ?>.jpg" class="cart-item-image" alt="Voetbal1">
        <?php echo $item['titel']?>
    </td>        
    <td style="text-align:right;"><?php echo $item['aantal']?></td>
    <td style="text-align:right;">&euro; <?php echo $item['prijs']?></td>
    <td style="text-align:right;">&euro; <?php echo $item['prijs'] * $item['aantal'] ?></td>
</tr>    
<?php
$totaal_aantal += $item['aantal'];
$totaal_prijs += $item['prijs'] * $item['aantal'];
} ?>

<tr>
    <td><strong>Totalen</strong></td>
    <td style="text-align:right;"><?php echo $totaal_aantal ?> </td>
    <td> &nbsp;</td>
    <td style="text-align:right;">&euro; <?php echo $totaal_prijs ?></td>
</tr>
<a id="btn-bestelling" href="bestelform.php?action=empty_bestellingPlaatsen">Bestelling Plaatsen</a> 


</tbody>
</table>
<?php } ?>



