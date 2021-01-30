<?php require_once "/ecommerce/php/connection/db.php" ?>

<?php
$sql= "SELECT mdp_client FROM client WHERE id_client = ?";
$stml= $conn->prepare($sql);
$stml->execute( array($_SESSION['id']) );
$stml->execute();
$mdp_client = $stml;
$newmdp=$_GET['newmdp']; 
if ($mdp_client==$_GET['mdp_client'])
{
 $stml=  $conn->prepare("UPDATE client SET mdp_client=$newmdp WHERE id_client=? ");
 $stml->bindValue(1,$_SESSION['id']);

}

else
{
   echo "Attention votre mot de passe ne correspond pas a celui que vous avez définie lors de votre enregistrement.";
}


?> 
