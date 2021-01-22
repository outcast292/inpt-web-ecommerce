<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";

$query = "delete from produit where id_produit=?";
$stml = $conn->prepare($query);
$stml->bindValue(1, $_GET['id_produit'], PDO::PARAM_INT);

$stml->execute();




$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
