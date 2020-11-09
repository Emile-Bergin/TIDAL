<h1>Basket</h1>
<hr>
<div class="basket" style="display:flex;flex-wrap:wrap;">
<?php
	echo "<a href=\"../controllers/DeleteBasket.php\">Vider panier</a>";
    foreach ($productlist as $produit) {
        echo '<section style="background:'.rand_color().';margin:20px;border-radius: 5px;width:400px;padding:5px;">';
		echo '<h2>'.$produit["name"].'</h2>';
		echo '<p>'.$produit["description"].'</p>';
        echo '<h3>Prix: '.$produit["price"].'</h3>';
        echo '<p>Vous en avez commandé '.$product["quantity"].'<p>';
		echo '</section>';
        
    }
?>

