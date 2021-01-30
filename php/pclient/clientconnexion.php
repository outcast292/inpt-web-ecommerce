<?php
require_once "/ecommerce/php/connection/db.php";
$req=$conn->prepare("select * from client where email=:email");
$req->execute(array(
    'email' => $_GET['email']));

$result=$req->fetch();
$_SESSION=[];

if (!$result)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($_GET['passe']==$result['mdp_client']) {
       session_start();
    $_SESSION['id'] = $result['id_client'];
    $_SESSION['email'] = $_GET['email'];
    $_SESSION['nom']=$result['nom_client'];
    $_SESSION['prenom']=$result['prenom_client'];
    $_SESSION['tel']=$result['tel_client'];
    $_SESSION['date_naissance']=$result['date_naissance'];



}
    
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
 
return $_SESSION;
/*

if ($_GET['passe']==$result['mdp_client']){
    session_start();
    $_SESSION['id'] = $result['id_client'];
    $_SESSION['email'] = $_GET['email'];
    echo 'Vous êtes connecté !';
}
else {
    echo "nnn";
}
*/

?>
