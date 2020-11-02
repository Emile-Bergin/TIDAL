
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="./models/img/pipe-icon.png" />
	<title>Titre de la page</title>
	<!-- <link rel="stylesheet" href="style.css"> -->
	<!-- <script src="script.js"></script> -->
</head>
<body>
	<header>
		<div class="HeaderHaut" style="display:flex;justify-content: space-between;">
			<img src="../models/img/pipe-icon.png" alt="Logo pipe" style="width:50px;height:50px;margin-top:17px"></img>
			<h1>La pipe magique</h1>
			<form action="../controllers/Connexion.php" method="post" style="margin-top:30px;">
	  			<input type="text" id="username" name="username" required>
	 			<input type="password" id="password" name="password" required>
				<input type="submit" value="Valider">
			</form>
		</div>
		<nav>
    		<ul style="display:flex;justify-content: space-around;">
      			<li>
					<a href="../controllers/Products.php">Produits</a>
				</li>
				<li>
					<a href="../controllers/Basket.php">Panier</a>
				</li>
				<li>	
					<a href="../controllers/AccountCreation.php">Créer un compte</a>
			    </li>
    		</ul>
  		</nav>
	</header>
	<hr>
