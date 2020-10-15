<?php
// Reporte toutes les erreurs PHP
ini_set('display_errors',1);
error_reporting(-1);
// Fichier de Ressources
require_once("./models/PDO.php");
$pdo= new PDO();
//session
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>