
<?php

require_once "/ecommerce/php/pclient/clientconnexion.php";
$sql= "DELETE FROM client WHERE id_client = ?";
$stml= $conn->prepare($sql);
$stml->bindValue(1,$_SESSION['id']);
$stml->execute();
exit;

?>

