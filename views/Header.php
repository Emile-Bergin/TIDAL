
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Titre de la page</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<header>
		<img src="./models/img/logo.jpg" alt="Logo pipe" style="width:50px;height:50px;"></img>
		<p>Shity_dropshipping.com</p>
		<form action="./controlleurs/Connexion.php" method="post">
  			<input type="text" id="username" name="username" required>
 			<input type="password" id="password" name="password" required>
			<input type="submit" value="Valider">
		</form> 
		<nav>
    		<ol>
      			<li>
					<a href="./controlleurs/Home.php">Produits</a>
				</li>
				<li>
					<a href="./controlleurs/Basket">Panier</a>
				</li>
				<li>	
					<a href="./controlleurs/AccountCreation.php">Créer un compte</a>
			    </li>
    		</ol>
  		</nav>
	</header>
