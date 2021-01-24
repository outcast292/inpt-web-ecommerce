<?php
require_once "../connection/db.php";
$query = "select id_user, nom_user , prenom_user , email_user , is_admin , tel_user,fonction from utilisateurs";
$sql = $conn->prepare($query);
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_ASSOC);

$msg["data"] = $data;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
