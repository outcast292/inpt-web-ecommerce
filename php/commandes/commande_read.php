<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
#TODO add security
if (isset($_GET["id_commande"])) {
    $query = 'SELECT   co.*   FROM commande co    where  co.id_commande=:id_commande';
    $sql = $conn->prepare($query);
    $sql->execute(array("id_commande" => $_GET["id_commande"]));
    $commandes = $sql->fetch();
    
    $msg["data"] = $results;
    $msg["code"] = 200;
    $msg["msg"] = "ok";

    $json = json_encode($msg);
    echo $json;
} else {
    echo json_encode(array("code" => 400, "message" => "Error, parametres non sufficent"));
}
