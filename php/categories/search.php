<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
$query = "SELECT * from categorie where nom_categorie = :nom_categorie";

$sql = $conn->prepare($query);

$sql->bindValue('nom_categorie', $_GET['nom_categorie'], PDO::PARAM_STR);

$sql->execute();

$results = $sql->fetchAll(PDO::FETCH_ASSOC);

$msg["data"] = $results;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
