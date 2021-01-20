<?php

$p=$_GET['prix'];
$n=$_GET['label'];



$connect=new PDO('mysql:host=localhost;dbname=ecommerce', 'root' , '');

$sql="insert into produit (prix_produit , label ) values('',?,?)";
$stml=$connect->prepare($sql);

$stml->bindValue(1,$p,PDO::PARAM_STR);
$stml->bindValue(2,$n,PDO::PARAM_STR);

$stml->execute($sql);

header('location:produits.php');

?>








