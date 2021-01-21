<?php
$action=isset($_GET['action']) ? $_GET['action']:'';
// si cette variable existe on prend la valr et on la met dans action.sinon on met chaine vide
require_once "addProduit.php";
switch($action)
{
case 'Ajouter';
$id_marque=$_GET['id_marque'];
$id_categorie=$_GET['id_categorie'];
$label=$_GET['label'];
$prix_produit=$_GET['prix_produit'];
ajoutProduit($id_marque , $id_categorie , $label , $prix_produit);
break;

case 'Supprimer';
$id_produit=$_GET['id'];
DeleteProduit($id_produit);

break;

case 'Modifier';
$id_produit=$_GET['prix_produit'];
$label=$_GET['label'];
$prix_produit=$_GET['prix_produit'];
UpdatProduit($id_produit,$label , $prix_produit);

break;


}
$produit=getProduits();


?>