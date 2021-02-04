<?php
require_once "../../connection/db.php";
$query = "delete from adresse where id_adresse= :id_adresse";
$sql = $conn->prepare($query);
$sql->execute(array(
    "id_adresse"=>$_GET["id_adresse"]
));

$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
