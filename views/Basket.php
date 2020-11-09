<h1>Basket</h1>
<hr>
<div class="basket" style="display:flex;flex-wrap:wrap;">
<?php

	echo "<a href=\"../controllers/DeleteBasket.php\">Vider panier</a>";

    foreach ($productlist as $produit) {
        echo'<h2>'.$product["name"].'</h2>';
    }
?>

