<?php
//Model
require_once('../models/RessourceController.php');

//Actions
if ($_SESSION["connecte"] == CONNECT) { //si il est connecté
	var_dump($_SESSION["username"]);
    $id=$pdo->getCustomerID($_SESSION["username"]);
    echo '<br>';
    var_dump($id);
    echo '<br> basket=';
    $basket= $pdo->getBasket($id);
    var_dump($basket);

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
