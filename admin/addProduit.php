<?php


$m=$_POST['id_marque'];
$c=$_POST['id_categorie'];
$l=$_POST['label'];
$p=$_POST['prix_produit'];


$connect=new PDO('mysql:host=localhost;dbname=ecommerce', 'root' , '');

$sql="insert into produit (id_marque , id_categoeir , label , prix_produit ) values(:id_marque , :id_categorie , :label , :prix_produit)";
$stml=$connect->prepare($sql);

$stml->bindValue(1,$m,PDO::PARAM_INT);
$stml->bindValue(2,$c,PDO::PARAM_INT);
$stml->bindValue(3,$l,PDO::PARAM_STR);
$stml->bindValue(4,$p,PDO::PARAM_STR);

$stml->execute();

header("location:produits.php");

?>








