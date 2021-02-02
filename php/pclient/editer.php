<?php
require_once "/ecommerce/php/connection/db.php" ;
require_once "clientconnexion.php";

$sql="update client set  nom_client=? , prenom_client=? , email=?  , tel_client=? , date_naissance=? , sexe=? where id_client=?";
$stml=$conn->prepare($sql);
$stml->bindValue(7,$_SESSION['id']);
$stml->bindValue(1,$_GET['nom_client']);
$stml->bindValue(2,$_GET['prenom_client']);
$stml->bindValue(3,$_GET['email']);
$stml->bindValue(4,$_GET['tel_client']);
$stml->bindValue(5,$_GET['date_naissance']);
$stml->bindValue(6,$_GET['sexe']);
$stml->execute();
//header("location:/pc.php");
?>
