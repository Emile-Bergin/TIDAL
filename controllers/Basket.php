<?php
//Model
require_once('../models/RessourceController.php');

//Actions
echo 'ceci est un premier test'
if ($_SESSION["connecte"] == CONNECT) { //si il est connecté
	var_dump($_SESSION["username"]);
    $id=$pdo->getCustomerID($_SESSION["username"]);
    echo '<br>';
    var_dump($id);
    echo '<br> basket=';
    $basket= $pdo->getBasket($id);
    $productlist = array();
    foreach ($basket as $line) {
        array_push($productlist, $pdo->getProductById($line["product"]));
    }
    var_dump($basket);

}else{
    if(isset($_SESSION["tmpBasket"])){
        echo $_SESSION["tmpBasket"];
    }
}
echo 'ceci est le second test'

//Vue
require_once('../views/Header.php');
require_once('../views/Basket.php');
require_once('../views/Footer.php');
?>
