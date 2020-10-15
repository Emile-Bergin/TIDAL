
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
		<img src="../models/img/pipe-icon.png" alt="Logo pipe" style="width:50px;height:50px;"></img>
		<h1>La pipe magique</h1>
		<form action="../controllers/Connexion.php" method="post">
  			<input type="text" id="username" name="username" required>
 			<input type="password" id="password" name="password" required>
			<input type="submit" value="Valider">
		</form> 
		<nav>
    		<ol>
      			<li>
					<a href="../controllers/Products.php">Produits</a>
				</li>
				<li>
					<a href="../controllers/Basket">Panier</a>
				</li>
				<li>	
					<a href="../controllers/AccountCreation.php">Créer un compte</a>
			    </li>
    		</ol>
  		</nav>
	</header>
