<?php
require_once "../../connection/db.php";
//require_once "../verify_session.php";
session_start();
    $query = 'select produit.id_produit,label, description_produit , prix_produit from produit , wishlist where produit.id_produit = wishlist.id_produit and id_client=:id_client';
    
    $sql = $conn->prepare($query);
    $sql->execute(array("id_client" => $_SESSION["id_client"]));
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    $msg["data"] = $results;
    $msg["code"] = 200;
    $msg["msg"] = "ok";


    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;

