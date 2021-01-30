
<?php
require_once "/ecommerce/php/pclient/clientconnexion.php";
$sql= "DELETE FROM client WHERE id_client = ?";
$stml= $conn->prepare($sql);
$stml->bindValue(1,$_SESSION['id']);
$stml->execute();
$mdp_client = $stml;
exit;




/*require_once "/ecommerce/php/pclient/clientconnexion.php";
   $sql= "SELECT mdp_client FROM client WHERE id_client = ?";
   $stml= $conn->prepare($sql);
   $stml->bindValue(1,$_SESSION['id']);
   $stml->execute();
   $mdp_client = $stml;
   
   if ($mdp_client==$_GET['mdp_sup'])
   {
      
   
    $conn->prepare("DELETE FROM client WHERE id_client = ?")->execute( array($_SESSION['id']) );
   echo "ok";
   
   }
   
  
   exit();
*/
?>

<!--function updatepass(){
   global $conn;

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

}
?>
-->