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


<script>

function ConfirmerSuppresion() {
var r = confirm("Vous voulez vraiment supprimer votre compte");
if (r == true) {
  txt = "You pressed OK!";
} else {
  txt = "You pressed Cancel!";
}

}
</script>



</head>
<body>
<?php require_once "req/navbar.php"; ?>
<div class="p-3 mb-2 bg-info text-white"  style="margin-top : 5% ">ESPACE CLIENT </div>

<div style="float:left ; margin-left:10%">
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#home" role="tab">Espace Client</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Historique des commandes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Les porduits de votre wishlist</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Parametres du compte</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane" id="home" role="tabpanel">
<br/>   
   <!-- <img src="/img/logo.png" width="15%"> -->
   <h6 style="color:blue"><p class="text-monospace"> 
   <?php echo "BIENVENUE"." " . $_SESSION['prenom'] ." ".$_SESSION['nom'] ." " ."SUR VOTRE VOTRE ESPACE CLIENT"?></p></h6><hr/>
<p class="text-monospace">
    <ul>
  <li>  Manefestez-vous !! </li> <li>Modifiez vos options !!</li>  <li>controlez vos commandes !! </li><li>Voir vos wishlist!!</li>

    </ul>

</p>



  </div>
  <div class="tab-pane" id="profile" role="tabpanel">
  <table class="table table-hover" id="table_search">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Prix Commande</th>
                                <th scope="col">Date Commande</th>
                                <th scope="col">Options</th>
                                </thead>
                            <tbody id="table_body">

                            </tbody>
                            </thead>
 
                         <tr>
                        <?php foreach($commande as $C): ?>
                        <td><?php  echo $C['id_commande']; ?></td>
                        <td><?php  echo $C['prix_commande'] ;?></td>
                        <td><?php  echo $C['date_commande']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </table>
                        
  </div>
  <div class="tab-pane" id="messages" role="tabpanel">
  <table class="table table-hover" id="table_search1">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Produit</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>     
                        <tbody id="table_body">

                        </tbody>
                        <tr>
                            <?php foreach($wish as $wishs): ?>
                            <td><?php echo $wishs['label'] ;?> </td>
                            <td>Options</td>
                            <?php endforeach ; ?>
                    </table
                    >


  </div>
  <br/>
  <div class="tab-pane" id="settings" role="tabpanel">

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Editer votre compte
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Votre compte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/php/pclient/editer.php" method="get">
           <input type="hidden" name="action" value="Modifer">
      <div class="form-group">
    <label >Nom</label>
    <input type="text" class="form-control" name="nom_client" value=<?php echo $_SESSION['nom'] ?>>
  </div>
  <div class="form-group">
    <label >Nom</label>
    <input type="text" class="form-control" name="prenom_client" value=<?php echo $_SESSION['prenom'] ?>>
  </div>
  <div class="form-group">
    <label >Telephone</label>
    <input type="text" class="form-control" name="tel_client" value=<?php echo $_SESSION['tel'] ?>>
  </div>
    <button type="submit" class="btn btn-sucess">Enregistrer</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</div>



<br/> <br/>
<form action="/php/pclient/Delete.php" method="get">
  
  <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModall" onclick="ConfirmerSuppresion()">
Supprimer Compte
</button>
  </form>
                            </div>

</div>
</div>
                            </div></div>

<div class="card "  style= " margin-left:70%;">
  <div class="card-header">
  <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkKVxJd7bPyMpyndL4G_-2yV8It3rTM460ZA&usqp=CAU" width="30%">
  </div>
  <input type="file" name="" id="">
  <div class="card-body">
    <h5 class="card-title">PROFIL</h5>
    <p class="card-text">
    <p class="font-weight-bolder">Nom: <?php echo $_SESSION ['nom'] ?> </p>
                        <p class="font-weight-bolder">Prenom:<?php echo $_SESSION['prenom'] ?></p>
                        <p class="font-weight-bolder">E_mail:<?php echo $_SESSION['email'] ?></p>
                        <p class="font-weight-bolder">N° Telephone: <?php echo $_SESSION['tel'] ?> </p>
                        <p class="font-weight-bolder">Date naissance:<?php echo $_SESSION['date_naissance'] ?></p>
    </p>
    <a href="../php/pclient/deconnexion.php" class="btn btn-danger">Se deconnecter</a>
  </div>
                            </div>






                            <?php
      require_once "req/footbar.php";

            ?> 


</body>