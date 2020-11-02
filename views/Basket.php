<?php
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