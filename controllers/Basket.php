<?php
//Model
require_once('../models/RessourceController.php');

//Actions
if ($_SESSION["connecte"] == CONNECT) { //si il est connecté
    $id=$pdo->getCustomerID($_SESSION["username"]);
    $basket= $pdo->getBasket($id);
    foreach ($basket as $line){
        var_dump($line);
    }
}else{
    if(isset($_SESSION["tmpBasket"])){
        echo $_SESSION["tmpBasket"];
    }
}

//Vue
require_once('../views/Header.php');
require_once('../views/Basket.php');
require_once('../views/Footer.php');
?>
