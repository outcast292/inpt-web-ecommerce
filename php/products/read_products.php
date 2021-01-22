<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
#TODO add security
if (isset($_GET["search"]) || isset($_GET["categorie"])|| isset($_GET["marque"])) {
    $query = 'SELECT  pr.id_produit,label,prix_produit,count(qtt.id_produit) as qtt_sold,SUBSTRING(description_produit, 1,30) as description_produit  from produit pr left join qt_commande qtt on pr.id_produit=qtt.id_produit WHERE 1=1 ';
    $params = array();
    if (!empty($_GET["search"])) {
        $query .= " and label like :search or description_produit like :search ";
        $params["search"] = "%".$_GET["search"]."%";
    }
    if (!empty($_GET["categorie"])) {
        $query .= " and id_categorie = :categorie";
        $params["categorie"] = $_GET["categorie"];
    }
    if (!empty($_GET["marque"])) {
        $query .= " and id_marque = :marque";
        $params["marque"] = $_GET["marque"];
    }

    $query .= ' GROUP by pr.id_produit   order by qtt_sold  desc limit 12';

    $sql = $conn->prepare($query);
    $sql->execute($params);
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);


    $msg["data"] = $results;
    $msg["code"] = 200;
    $msg["msg"] = "ok";

    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;
} else {
    echo json_encode(array("code" => 400, "message" => "Error, parametres non sufficent"));
}
