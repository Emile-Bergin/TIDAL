<h1>Products</h1>
<hr>
<div class="products" style="display:flex;flex-wrap:wrap;">
<?php
	foreach($produts as $product){
		echo '<section style="background:'.rand_color().';margin:20px;border-radius: 5px;width:400px;padding:5px;">';
		echo '<h2>'.$product["name"].'</h2>';
		echo '<p>'.$product["description"].'</p>';
		echo '<h3>Prix: '.$product["name"].'</h3>';
		echo '<form action="" method="post">';
			echo '<input type="hidden" name="articleId" value="'.$product["id"].'">';
			echo '<label for="number">Quantité: </label>';
			echo '<input type="number" name="number" value="1">';
			echo '<input type="submit" value="Ajouter au panier">';
		echo '</form>';
		//var_dump($product);
		echo '</section>';
	}
?>
</div>
