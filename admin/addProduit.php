<?php
$pdo=new PDO('mysql:host=localhost;dbname=ecommerce', 'root' , '');

function ajoutProduit($id_marque , $id_categorie , $label , $prix_produit)
{
global $pdo;
$sql="insert into produit (id_marque , id_categorie , label , prix_produit ) values(? , ?,  ?,?)";
$stml=$pdo->prepare($sql);
$stml->bindValue(1,$id_marque,PDO::PARAM_INT);
$stml->bindValue(2,$id_categorie,PDO::PARAM_INT);
$stml->bindValue(3,$label,PDO::PARAM_STR);
$stml->bindValue(4,$prix_produit,PDO::PARAM_STR);

return $stml->execute();
}
function DeleteProduit($id_produit)
{
global $pdo;
$sql="delete from produit where id_produit=?";
$stml=$pdo->prepare($sql);
$stml->bindValue(1,$id_produit,PDO::PARAM_INT);

return $stml->execute();
}
function UpdatProduit($id_produit,$label , $prix_produit)
{
global $pdo;
$sql="update produit set label=:label , prix_produit=:prix_produit where id_produit=:id_produit";
$stml=$pdo->prepare($sql);
$stml->bindValue('id_produit',$id_produit,PDO::PARAM_INT);

$stml->bindValue('label',$label,PDO::PARAM_STR);
$stml->bindValue('prix_produit',$prix_produit,PDO::PARAM_STR);

return $stml->execute();
}
function getProduits()
{
global $pdo;
$sql="select * from produit";
$stml=$pdo->prepare($sql);

$stml->execute();
return $stml->fetchAll(PDO::FETCH_ASSOC);
}

?>