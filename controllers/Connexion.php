<?php
//Model
require_once('../models/RessourceController.php');
echo "Connexion";
//Actions
//DEBUG
echo $_POST["username"].$_POST["password"]."<br>"; //Affichage username password
echo password_hash($_POST["password"], PASSWORD_DEFAULT)."<br>"; //Affichage password hashé

$_SESSION["connecte"]=$pdo->checkConnexion($_POST["username"],$_POST["password"]);
if($_SESSION["connecte"]==CONNECT){
    $_SESSION["username"]=$_POST["username"];
}

//Vue
//require_once("../controleur/Home.controleur.php");
 ?>
