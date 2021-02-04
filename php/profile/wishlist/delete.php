<?php
session_start();
require_once "../../connection/db.php";
$query = "delete from wishlist where id_produit= :id_produit";
$sql = $conn->prepare($query);
$sql->execute(array(
    "id_produit"=>$_GET["id_produit"]
));

$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
