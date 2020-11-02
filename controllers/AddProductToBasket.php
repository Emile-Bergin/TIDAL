<?php
var_dump($_POST);
//Model
require_once('../models/RessourceController.php');

//Actions

if (isset($_SESSION)) {
    if (isset($_SESSION["connecte"])) {
        if ($_SESSION["connecte"] == CONNECT) { //si il est connecté
            echo '';
        }else{

        }
    } else {
        echo '';
    }
}



//
