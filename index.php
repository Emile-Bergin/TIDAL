<?php
echo "test";
error_reporting(-1);
ini_set('display_errors', 'On');
session_start();

//require('./libs/smarty/Smarty.class.php');

try {
    $bdd = new PDO("mysql:host=localhost;dbname=webapp", "debian-sys-maint",  "aR7RIRZbiUZw3dYk");
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée !";
	echo "$e";
    die();
}
require_once('./controllers/home.php');
?>