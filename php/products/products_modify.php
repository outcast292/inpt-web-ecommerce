<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";

$sql = "update produit set label=:label , prix_produit=:prix_produit where id_produit=:id_produit";
$stml = $conn->prepare($sql);
$stml->bindValue('id_produit', $_GET['id_produit'], PDO::PARAM_INT);
$stml->bindValue('label', $_GET['label'], PDO::PARAM_STR);
$stml->bindValue('prix_produit', $_GET['prix_produit'], PDO::PARAM_STR);

$stml->execute();


$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
?>