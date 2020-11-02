
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="./models/img/pipe-icon.png" />
	<title>La pipe magique</title>
    <link rel="icon" href="../models/img/pipe-icon.png" />
	<!-- <link rel="stylesheet" href="style.css"> -->
	<!-- <script src="script.js"></script> -->
</head>
<?php
var_dump($_SESSION);
?>
<body>
	<header>
		<div class="HeaderHaut" style="display:flex;justify-content: space-between;">
			<img src="../models/img/logo.png" alt="Logo pipe" style="width:100px;height:100px;"></img>
			<h1>La pipe magique</h1>
			<?php
			function echoConnexion(){
				echo '<form action="../controllers/Connexion.php" method="post" style="margin-top:30px;">
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
		<nav>
			<ul style="display:flex;justify-content: space-around;">
      			<li>
					<a href="../controllers/Products.php">Produits</a>
				</li>
		<?php
		 if(isset($_SESSION)) {
         	if (isset($_SESSION["connecte"])) {
	         	if ($_SESSION["connecte"] == CONNECT) {
					echo '<li> <a href="../controllers/Basket.php"><h2 class="textAlignCentre">Panier</h2></a></li>';				
				}
			}else{
				echo'<li>	
					<a href="../controllers/AccountCreation.php">Créer un compte</a>
			    </li>';
			}
		}
		
		?>
    		
				
    		</ul>
  		</nav>
	</header>
	<hr>
