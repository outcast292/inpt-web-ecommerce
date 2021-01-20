<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
#TODO add security
if (isset($_GET["from_date"]) and isset($_GET["to_date"])) {
    $query = 'SELECT   co.id_commande, CONCAT(c.nom_client ," " , c.prenom_client) as nom_client,c.email, c.tel_client,co.date_commande , co.valide, co.prix_commande ,co.etat_actuell   FROM commande co left join client c on co.id_client = c.id_client    where  date(co.date_commande) between :from_date and :to_date';
    $sql = $conn->prepare($query);
    $sql->execute(array("from_date" => $_GET["from_date"], "to_date" => $_GET["to_date"]));
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    $msg["data"] = $results;
    $msg["code"] = 200;
    $msg["msg"] = "ok";

    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;
} else if (isset($_GET["get_nonvalidate"])) {
    $query = 'SELECT   co.id_commande, CONCAT(c.nom_client ," " , c.prenom_client) as nom_client,c.email, c.tel_client,co.date_commande , co.valide, co.prix_commande ,co.etat_actuell   FROM commande co left join client c on co.id_client = c.id_client   where  co.valide=0';
    $sql = $conn->prepare($query);
    $sql->execute();
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
    $msg["data"] = $results;
    $msg["code"] = 200;
    $msg["msg"] = "ok";
    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;
} else {
    echo json_encode(array("code" => 400, "message" => "Error, parametres non sufficent"));
}
