<?php
// Reporte toutes les erreurs PHP
ini_set('display_errors',1);
error_reporting(-1);
// Fichier de Ressources
require_once("./models/pdo.php");

//session
if(session_status() !== PHP_SESSION_ACTIVE) session_start();

// echo $_POST["username"].$_POST["password"]."<br>"; //Affichage username password
// echo password_hash($_POST["password"], PASSWORD_DEFAULT)."<br>"; //Affichage password hashé

$affichage = new Affichage();
$_SESSION["connecte"]=$affichage->checkConnexion($_POST["username"],$_POST["password"]);
if($_SESSION["connecte"]==CONNECT){
    $_SESSION["username"]=$_POST["username"];
    $_SESSION["rights"]=$affichage->getUserRights($_SESSION["username"]);
}

require_once("../controleur/Home.controleur.php");
 ?>
