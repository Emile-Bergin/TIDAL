<?php
//Model
require_once('../models/RessourceController.php');
$customerId=$pdo->getCustomerID($_SESSION["username"]);
$pdo->deleteBasket($id);
header("Location: ../controllers/Products.php");
?>
