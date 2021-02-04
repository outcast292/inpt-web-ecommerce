<?php
session_start();
require_once "../connection/db.php";
if (isset($_SESSION["id_client"])) {
    $query = "select  nom_client , prenom_client , email , sexe , tel_client , date_naissance from client where id_client = :id_client";
    $sql = $conn->prepare($query);
    $sql->execute(array(
        "id_client" => $_SESSION["id_client"]
    ));
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    $query = "select  adresse , code_postal from adresse where id_client = :id_client";
    $sql = $conn->prepare($query);
    $sql->execute(array(
        "id_client" => $_SESSION["id_client"]
    ));
    $data_adresse = $sql->fetchAll(PDO::FETCH_ASSOC);
    $msg["data"] = $data;
    $msg["adresse"] = $data_adresse;
    $msg["code"] = 200;
    $msg["msg"] = "ok";

    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;
} else
    echo json_encode(array("code" => 400, "message" => "Error, parametres non sufficent"));
