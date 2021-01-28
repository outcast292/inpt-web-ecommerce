<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
$query = 'SELECT p.id_produit, p.options_produit, p.qtt_panier, pr.prix_produit, pr.label FROM panier p LEFT JOIN produit pr ON p.id_produit=pr.id_produit WHERE id_client=:id_client';


$sql = $conn->prepare($query);
$sql->execute(array("id_client" => $_GET["id_client"]));
$cart = $sql->fetchAll(PDO::FETCH_ASSOC);

$msg["data"] = $cart;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
