<?php
require_once "/ecommerce/php/connection/db.php" ;
require_once "clientconnexion.php";

$sql="select  p.id_produit ,label , prix_produit from produit p, wishlist w where p.id_produit=w.id_produit and id_client= ?";
$stml=$conn->prepare($sql);
$stml->bindValue(1,$_SESSION['id']);
$stml->execute();
$wish=$stml->fetchAll(PDO :: FETCH_ASSOC);
?>
