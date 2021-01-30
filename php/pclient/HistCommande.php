<?php
require_once "/ecommerce/php/connection/db.php" ;
require_once "clientconnexion.php";

$sql="select  id_commande , prix_commande , date_commande from commande where id_client= ?";
$stml=$conn->prepare($sql);
$stml->bindValue(1,$_SESSION['id']);
$stml->execute();
$commande= $stml->fetchAll(PDO :: FETCH_ASSOC);
?>