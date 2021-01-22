<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
$query = 'SELECT p.id_produit, m.nom_marque, c.nom_categorie, p.label, p.prix_produit FROM produit p LEFT JOIN categorie c ON c.id_categorie=p.id_categorie LEFT JOIN marque m ON m.id_marque=p.id_marque';


$sql = $conn->prepare($query);
$sql->execute();
$products = $sql->fetchAll(PDO::FETCH_ASSOC);

$msg["data"] = $products;
$msg["query"] = $query;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;