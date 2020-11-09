<?php
var_dump($_POST);
//Model
require_once('../models/RessourceController.php');

//Actions


if ($_SESSION["connecte"] == CONNECT) { //si il est connecté
    $id=$pdo->getCustomerID($_SESSION["username"]);
    $pdo->AddToBasket($id, $_POST["articleId"], $_POST["number"]);
}else{
    if (!isset($_SESSION["tmpBasket"])) {
    	$list=array();
    	$myObjtJson->articleId=$_POST["articleId"];
    	$myObjtJson->number=$_POST["number"];
    	array_push($list,$myObjtJson);
	    $_SESSION["tmpBasket"] = json_encode($list);
    }else{
    	$list=json_decode($_SESSION["tmpBasket"]);
    	$myObjtJson->articleId=$_POST["articleId"];
    	$myObjtJson->number=$_POST["number"];
    	array_push($list,$myObjtJson);
	    $_SESSION["tmpBasket"] = json_encode($list);
    }
}

header("Location: ../controllers/Products.php");
