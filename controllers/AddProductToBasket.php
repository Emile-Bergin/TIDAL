<?php
var_dump($_POST);
//Model
require_once('../models/RessourceController.php');

//Actions


if ($_SESSION["connecte"] == CONNECT) { //si il est connecté
    $id=$pdo->getCustomerID($_SESSION["username"]);
    var_dump($id);
    $pdo->AddToBasket($id, $_POST["articleId"], $_POST["number"]);
}else{
    $_SESSION["tmpBasket"]=$_SESSION["tmpBasket"]+"{".$_POST["articleId"].",".$_POST["number"]."},";
}

//header("Location: ../controllers/Products.php");


//
