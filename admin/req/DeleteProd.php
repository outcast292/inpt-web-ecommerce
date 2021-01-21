<?php
$id=$_GET['id'];
$connect=new PDO('mysql:host=localhost;dbname=ecommerce', 'root' , '');

$sql="Delete from produit where id=? ";
$stml=$connect->prepare($sql);

$stml->bindValue(1,$id,PDO::PARAM_INT);
$stml->execute();


header('location:produits.php');
?>