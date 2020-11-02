<?php
// Model
require_once('../models/RessourceController.php');

// Actions
$_SESSION["connecte"]=DISCONNECT;
session_unset();
session_destroy();
header("Location: ../controleur/Home.controleur.php");
 ?>

