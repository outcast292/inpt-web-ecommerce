<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
#TODO add security
if (isset($_GET["id_commande"])) {
    $query = 'SELECT   co.date_commande,co.prix_commande,co.etat_actuell ,co.date_etat_actuel    FROM commande co    where  co.id_commande=:id_commande';
    $query2 = 'SELECT   co.id_produit,co.prix_produit_commande,co.qtt_commande, pr.label, m.nom_marque  FROM qt_commande co left join produit pr on co.id_produit=pr.id_produit left join  marque m on m.id_marque=pr.id_marque   where  co.id_commande=:id_commande';
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
