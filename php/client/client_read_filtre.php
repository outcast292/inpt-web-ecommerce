<?php
require_once "../connection/db.php";
//require_once "../verify_session.php";
$query =  'SELECT c.id_client, CONCAT(c.nom_client ," " , c.prenom_client) as nom_client, COUNT(co.id_commande) as nbr_commande, MAX(co.date_commande) as last_commande ,MIN(co.date_commande) as first_commande , c.email, c.tel_client,  c.date_naissance, c.sexe, ad.adresse, ad.code_postal, MIN(co.prix_commande) as minimum_spent, MAX(co.prix_commande) as maximum_spent FROM client c left join commande co on c.id_client=co.id_client left join adresse ad on c.id_client=ad.id_client GROUP BY c.id_client';

$filters = array("search", "from_date", "to_date", "adresse", "code_postal", "minimum_commande", "maximum_commande", "minimum_spent", "maximum_spent");
$filters_active = array();
foreach ($filters as $value) {
    if (isset($_GET[$value])) {
        switch ($value) {
            case 'search':
                $filters_active[$value] = " (c.email LIKE '%:search%' OR nom_client LIKE '%:search%' OR c.id_client LIKE '%:search%')";
                break;
            case 'from_date':
                $filters_active[$value] = " first_commande >= :from_date";
                break;
            case 'to_date':
                $filters_active[$value] = " :to_date >= last_commande" ;
                break;
            case 'adresse':
                $filters_active[$value] = " ad.adresse LIKE '%:adresse%'";
                break;
            case 'code_postal':
                $filters_active[$value] = " ad.code_postal=:code_postal";
                break;
            case 'minimum_commande':
                $filters_active[$value] = ' nbr_commande >= :minimum_commande';
                break;
            case 'maximum_commande':
                $filters_active[$value] = ' :maximum_commande >= nbr_commande';
                break;
            case 'minimum_spent':
                $filters_active[$value] = " co.minimum_spent >= :minimum_spent" ;
                break;
            case 'maximum_spent':
                $filters_active[$value] = " :maximum_spent >= co.maximum_spent";
                break;
        }
    }
}
$where = 0;
foreach ($filters_active as $k => &$v) {
        if ($where == 0) {
            $query . " WHERE" . $v;
            $where = 1;
        } else {
            $query . " AND" . $v;
        }
}

$sql = $conn->prepare($query);
$sql->execute();

$clients = $sql->fetchAll(PDO::FETCH_ASSOC);
$msg["data"] = $clients;
$msg["code"] = 200;
$msg["msg"] = "ok";

$json = json_encode($msg, JSON_NUMERIC_CHECK);
echo $json;
