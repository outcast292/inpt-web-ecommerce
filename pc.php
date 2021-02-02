
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMOIL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <?php require_once "./php/pclient/clientconnexion.php"; ?>
    <?php require_once "./php/pclient/HistCommande.php"; ?>
    <?php require_once "./php/pclient/wishlist.php"; ?>
    <script >
function ConfirmerSuppresion() {
confirm("Vous voulez vraiment supprimer votre compte, Attention cette operation est irreversible");
}




    </script>
</head>
    <body>
    
<?php require_once "req/navbar.php"; ?>
<div class="row"  style="margin-top:5% ">
  <div class="col-2 " style="background-color: #343a40;">
  .<br/>.<br/>.<br/>
  <h4 style="color:floralwhite"> <i>Espace Client</i></h4>
  <hr/>

    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> <i class="bi bi-briefcase-fill">
Home</i></a>
      
   <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="bi bi-person-fill"> Profile</i></a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="bi bi-basket3-fill">Panier</i>
</a>
     <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-wish" role="tab" aria-controls="v-pills-wish" aria-selected="false"><i class="bi bi-heart-fill">WishList</i>
</a>
<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-commande" role="tab" aria-controls="v-pills-commande" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg><i>Commandes</i>
</a>
   <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="bi bi-gear-fill">Parametres</i>
</a>
<br/><br/>
<a href="/php/pclient/deconnexion.php"><button type="submit"class="btn btn-danger"><i>Se deconnecter</i></button></a>
.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>
  </div>
      </div>
      

<div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
      <h6 style="color:blue; margin-top:7%"><p class="text-monospace"> 
   <?php echo "BIENVENUE"." " . $_SESSION['prenom'] ." ".$_SESSION['nom'] ." " ."SUR VOTRE VOTRE ESPACE CLIENT"?></p></h6><hr/>
<p class="text-monospace">
    <ul>
  <li>  Manefestez-vous !! </li> <li>Modifiez vos options !!</li>  <li>controlez vos commandes !! </li><li>Voir vos wishlist!!</li>

    </ul>

</p>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    
      <h6 style="margin-top:2%"><i>Profile </i></h6> <hr/>
      <div class="card" style="width: 15rem; float:left">
  <img src="/img/logo.png" class="card-img-top" >
  <div class="card-body">
    <p class="card-text" style="text-align:center"><b><?php echo $_SESSION['prenom'] ." ".$_SESSION['nom'] ?> </b></p>
  </div>
  <hr/>
  <i > WishList: <?php $req=$conn->prepare("select count(*) from wishlist where id_client=:id_client");
$req->execute(array(
    'id_client' => $_SESSION['id']));
    $result=$req->fetch();
    echo $result['count(*)']; ?>
  </i>
  <i > Commande :  <?php $req=$conn->prepare("select count(*) from commande where id_client=:id_client");
$req->execute(array(
    'id_client' => $_SESSION['id']));
    $result=$req->fetch();
    echo $result['count(*)']; ?>  </i></div>
  <div class="card text-center "style="width: 50rem;" >
  <div class="card-header">
    Modifier votre compte
  </div>

  <div class="card-body">
    <p class="card-text"><form action="/php/pclient/editer.php" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value=<?php echo $_SESSION['email'] ?> name="email">
  </div>
  <div class="form-group">
  <label >Nom</label>
    <input type="text" class="form-control" value=<?php echo $_SESSION['nom'] ?> name="nom_client" >
    <label >Prenom</label>
    <input type="text" class="form-control" value=<?php echo $_SESSION['prenom'] ?> name="prenom_client">
  </div>
  <div class="form-group">
  <label >Date de naissnace</label>
    <input type="date_create_from_format" class="form-control" value=<?php echo $_SESSION['date_naissance'] ?>  name="date_naissance"></div>
    <div class="form-group">
  <label >Sexe</label>
    <input type="text" class="form-control"  value=<?php echo $_SESSION['sexe'] ?> name="sexe"></div>
    <div class="form-group">
  <label >Telephone</label>
    <input type="text" class="form-control"  value=<?php echo $_SESSION['tel'] ?>  name="tel_client"></div>
 
    <button type="submit" class="btn btn-info">Modifier</button>

</form></p>

</div>
      
    </div>
  </div>
   

    
      <div class="tab-pane fade" id="v-pills-wish" role="tabpanel" aria-labelledby="v-pills-wish-tab"> <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produit</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
  </tboy>
  <tr>
  
                            <?php foreach($wish as $wishs): ?>
                              <td><?php echo $wishs['id_produit'] ;?> </td>
                            <td><?php echo $wishs['label'] ;?> </td>
                            <td>Options</td>
                            <?php endforeach ; ?>
                    
</table></div>
      <div class="tab-pane fade" id="v-pills-commande" role="tabpanel" aria-labelledby="v-pills-commande-tab">
      <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prix Commande</th>
      <th scope="col">Date Commande</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
  <tr>
                        <?php foreach($commande as $C): ?>
                        <td><?php  echo $C['id_commande']; ?></td>
                        <td><?php  echo $C['prix_commande'] ;?></td>
                        <td><?php  echo $C['date_commande']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        
</table> 
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top:10%">
  Modifier mot de passe
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier mot de passe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/php/pclient/ChangerPasswrd.php" method="get">
      <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe actuel</label>
    <input type="password" class="form-control" name="mdp_client">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nouveau mot de passe</label>
    <input type="password" class="form-control" name="newmdp">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  data-toggle="modal" data-target="#exampleModal">Enregistrer</button> 
      </div>
    </div>
  </div>
</div>
</div>

<br/> <br/>


<br/> <br/>
<form action="/php/pclient/Delete.php" method="get">
  
  <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModall" onclick="ConfirmerSuppresion()">
Supprimer Compte
</button>

<div class="alert alert-danger" role="alert">
  ATTENTION , CETTE OPERATION EST IRREVERSIBLE
</div>
      
      
      
      
      
      
      
      </div>

      
    </div>
  </div>
</div>
<?php
      require_once "req/footbar.php";

            ?> 



   

