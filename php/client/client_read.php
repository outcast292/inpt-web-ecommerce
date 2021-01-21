<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
$query =  'SELECT c.id_client, CONCAT(c.nom_client ," " , c.prenom_client) as nom_client, COUNT(co.id_commande) as nbr_commande, MAX(co.date_commande) as last_commande , c.email, c.tel_client,  c.date_naissance, c.sexe FROM client c left join commande co on c.id_client=co.id_client GROUP BY c.id_client';
$sql = $conn->prepare($query);
$sql->execute();

$clients = $sql->fetchAll(PDO::FETCH_ASSOC);
$msg["data"] = $clients;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
