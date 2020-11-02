
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="./models/img/pipe-icon.png" />
	<title>La pipe magique</title>
    <link rel="icon" href="../models/img/pipe-icon.png" />
	<link rel="stylesheet" href="../views/Header.css">
	<!-- <script src="script.js"></script> -->
</head>
<?php
var_dump($_SESSION);
?>
<body>
	<header>
		<div class="HeaderHaut" style="display:flex;justify-content: space-between;">
			<img id="logo" src="../models/img/logo.png" alt="Logo pipe" ></img>
			<h1>La pipe magique</h1>
			<?php
			function echoConnexion(){
				echo '<form id="formConnexion" action="../controllers/Connexion.php" method="post" >
	  						<input type="text" id="username" name="username" placeholder="identifiant" required>
				 			<input type="password" id="password" name="password" placeholder="mot de passe" required>
							<input type="submit" value="Connexion">
						</form>';
			}
			if(isset($_SESSION)) {
	         	if (isset($_SESSION["connecte"])) {
		         	if ($_SESSION["connecte"] == CONNECT) {
						echo '<h2><a href="../controllers/Deconnexion.php">Déconnexion</a></h2>';
					}else{
						echoConnexion();					
					}
				}else{
					echoConnexion();				
				}
			}			
			?>
			
		</div>
		<hr>
		<nav>
			<ul style="display:flex;justify-content: space-around;">
      			<li>
					<a class="btnMenuNav" href="../controllers/Products.php"><h2 class="h2Nav">Produits</h2></a>
				</li>
                <li>
                    <a class="btnMenuNav" href="../controllers/Basket.php"><h2 class="h2Nav">Panier</h2></a>
                </li>
                <li>
                    <a class="btnMenuNav" href="../controllers/AccountCreation.php"><h2 class="h2Nav">Créer un compte</h2></a>
                </li>
    		</ul>
  		</nav>
	</header>
	<hr>
