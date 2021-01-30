<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
<<<<<<< HEAD
session_start();
if (isset($_SESSION["id_client"]) && isset($_GET["id_produit"]) && isset($_GET["qtt_panier"])) {
    $options_produit="";
    foreach ($_GET as $key => $value) {
        # code...
        if ($key != "id_produit" && $key != "qtt_panier")
            $options_produit .= $key . " : " . $value ."<br>";
    }
    $query = 'INSERT INTO panier(id_client, id_produit, qtt_panier, options_produit) VALUES (:id_client, :id_produit, :qtt_panier, :options_produit)  ON DUPLICATE KEY UPDATE qtt_panier = qtt_panier + :qtt_panier';
    $sql = $conn->prepare($query);
    $sql->execute(array("id_client" => $_SESSION["id_client"], "id_produit" => $_GET["id_produit"], "qtt_panier" => $_GET["qtt_panier"], "options_produit" => $options_produit));
    $id = $conn->lastInsertId();
    $msg["code"] = 200;
    $msg["msg"] = "ok";
    $json = json_encode($msg, JSON_NUMERIC_CHECK);
    echo $json;
} else
    echo json_encode(array("code" => 400, "message" => "Error, parametres non sufficent"));
=======
$query = 'INSERT INTO panier(id_client, id_produit, qtt_panier, options_produit) VALUES (:id_client, :id_produit, :qtt_panier, :options_produit)';


$sql = $conn->prepare($query);
$sql->execute(array("id_client" => $_GET["id_client"], "id_produit" => $_GET["id_produit"], "qtt_panier" => $_GET["qtt_panier"], "options_produit" => $_GET["options_produit"]));
$id = $conn->lastInsertId();

$msg["id_ajoutpanier"] = $id;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
>>>>>>> smail
