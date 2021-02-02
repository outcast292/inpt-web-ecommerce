<?php 
require_once "clientconnexion.php";


// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

echo "vous etes deconnecté";
?>
