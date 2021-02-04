<?php
session_start();
require_once "../connection/db.php";
//require_once "../verify_session.php";
    $query2 = 'SELECT   date_commande,etat_actuell,prix_commande  FROM commande where  id_client=:id_client';
    $sql = $conn->prepare($query2);
    $sql->execute(array("id_client" => $_SESSION["id_client"]));
    $commande = $sql->fetchAll(PDO::FETCH_ASSOC);
    $msg["data"] = $commande;
    $msg["code"] = 200;
    $msg["msg"] = "ok";


    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;
