<style>
	form{
		display: inline-block;
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		width:auto;
		height:auto;
	}
	div{
		display:flex;
		justify-content: center;
	}
</style>
<div>
	<form action="../controllers/RunAccountCreation.php" method="post">
		<input type="text" id="user" name="firstname" placeholder="Prénom" required><br>
		<input type="password" id="pwd" name="familyname" placeholder="Nom" required><br>
		<input type="text" id="adresse" name="address" placeholder="Adresse" required><br>
		<input type="text" id="user" name="username" placeholder="Identifiant" required><br>
		<input type="password" id="pwd" name="password" placeholder="Mot de passe" required><br>
		<input type="submit" value="Créer">
	</form>
</div>
