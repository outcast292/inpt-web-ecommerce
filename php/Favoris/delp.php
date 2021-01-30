<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";

$query = "DELETE from wishlist where id_produit=? and id_client=?";
$stmt = $conn->prepare($query);
$stmt->bindValue(1, $_GET['id_produit'], PDO::PARAM_INT);
$stmt->bindValue(2, $_GET['id_client'], PDO::PARAM_INT);

$stmt->execute();




$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
