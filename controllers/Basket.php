<?php
//Model
require_once('../models/RessourceController.php');

//Actions
<<<<<<< HEAD
echo 'ceci est un premier test';
=======
>>>>>>> 1dfbfc0d755b3ed1802226e09710148df264b118
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
    var_dump($productlist);
    var_dump($basket);
    foreach ($productlist as $product) {
        foreach ($basket as $line) {
            if ($product["id"] == $line["product"]) {
                $product["quantity"] = $line["quantity"];
            }
        }
    }

}else{
    if(isset($_SESSION["tmpBasket"])){
        echo $_SESSION["tmpBasket"];
    }
}
<<<<<<< HEAD
echo 'ceci est le second test';
=======
>>>>>>> 1dfbfc0d755b3ed1802226e09710148df264b118

//Vue
require_once('../views/Header.php');
require_once('../views/Basket.php');
require_once('../views/Footer.php');
?>
