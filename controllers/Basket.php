<?php
//Model
require_once('../models/RessourceController.php');

//Actions
$produts=$pdo->getProducts();

//Vue
require_once('../views/Header.php');
require_once('../views/Basket.php');
require_once('../views/Footer.php');
?>
