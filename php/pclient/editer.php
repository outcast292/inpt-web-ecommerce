<?php
require_once "/ecommerce/php/connection/db.php" ;
require_once "clientconnexion.php";

$sql="update client set nom_client=? , prenom_client=? , tel_client=? ";
$stml=$conn->prepare($sql);
$stml->bindValue(1,$_SESSION['nom']);
$stml->bindValue(1,$_SESSION['prenom']);
$stml->bindValue(1,$_SESSION['tel']);
$stml->execute();
?>