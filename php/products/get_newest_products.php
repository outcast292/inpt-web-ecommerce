<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
#TODO add security
$query = 'SELECT  id_produit,label,prix_produit from produit order by id_produit desc limit 6 ';
$sql = $conn->prepare($query);
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_ASSOC);
$msg["data"] = $results;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
