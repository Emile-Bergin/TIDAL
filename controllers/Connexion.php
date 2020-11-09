<?php
//Model
require_once('../models/RessourceController.php');
echo "Connexion";

//Actions
//DEBUG
echo $_POST["username"]."<br>".$_POST["password"]."<br>"; //Affichage username password
echo password_hash($_POST["password"], PASSWORD_DEFAULT)."<br>"; //Affichage password hashé

$_SESSION["connecte"]=$pdo->checkConnexion($_POST["username"],$_POST["password"]);
if($_SESSION["connecte"]==CONNECT){
    $_SESSION["username"]=$_POST["username"];
}

if(isset($_SESSION["tmpBasket"])){
    if($_SESSION["tmpBasket"]!=null){
        var_dump($_SESSION["tmpBasket"]);
        $json=$_SESSION["tmpBasket"];
        echo '<br>';
        var_dump($json);
        echo '<br>';
        $jsonDecode=json_decode($_SESSION["tmpBasket"]);
        echo '<br>';
        var_dump($jsonDecode);
        echo '<br>';
        $customerId=$pdo->getCustomerID($_SESSION["username"]);
        foreach($jsonDecode as $elem){
        	$pdo->AddToBasket($customerId, $elem->articleId, $elem->articleId);
        }
    }
}


var_dump($_SESSION);
//Vue
require_once("../controllers/Basket.php");
 ?>
