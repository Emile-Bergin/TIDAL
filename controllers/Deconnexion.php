<?php
// Model
require_once('../models/RessourceController.php');

// Actions
$_SESSION["connecte"]=DISCONNECT;
session_unset();
session_destroy();
header("Location: ../controllers/Basket.php");
 ?>

