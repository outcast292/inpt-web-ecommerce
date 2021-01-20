<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
if (isset($_GET["id_client"])) {
    $query = 'SELECT c.id_client, CONCAT(c.nom_client ," " , c.prenom_client) as nom_client, COUNT(co.id_commande) as nombre_commandes, MAX(co.date_commande) as derniere_commande FROM client c left join commande co on c.id_client=co.id_client';
    $query2 = '';
    #TODO if i=0 and add AND for each condition
    $sql = $conn->prepare($query);
    $sql->execute(array("id_commande" => $_GET["id_commande"]));
    $commande = $sql->fetch(PDO::FETCH_ASSOC);
    $sql = $conn->prepare($query2);
    $sql->execute(array("id_commande" => $_GET["id_commande"]));
    $details = $sql->fetchAll(PDO::FETCH_ASSOC);
    $results["commande_info"] = $commande;
    $results["commande_details"] = $details;
    $msg["data"] = $results;
    $msg["code"] = 200;
    $msg["msg"] = "ok";

    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;
} else {
    echo json_encode(array("code" => 400, "message" => "Error, parametres non sufficent"));
}
