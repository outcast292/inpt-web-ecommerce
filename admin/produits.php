<?php
                $connect=new PDO('mysql:host=localhost;dbname=ecommerce', 'root' , '');

                $sql="select id_produit, id_marque , id_categorie, label, prix_produit from produit";
                $stml=$connect->query($sql);
                $rows=$stml->fetchAll(PDO::FETCH_ASSOC);
                
                require_once "Recpura.php";

                
                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/navbar.css" rel="stylesheet">
    <script src="../js/jquery-3.5.1.slim.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/admin/sidebar.css">
  

    
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 collapse  show d-md-flex bg-secondary  text-light   pt-2 pl-0 min-vh-100" id="sidebar">
    <div class="row">

        <h1 class="col-12  text-center">AMOIL</h1>
        <h6 class="col-12  text-center">Interface d'administration de site AMOIl</h6>

        <div class="col-12">
            <hr>
            <ul class="nav flex-column flex-nowrap overflow-hidden">
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="#"><i class="bi bi-house-fill"></i> <span class="d-none d-sm-inline">principale</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="bi bi-bag"></i> <span class="d-none d-sm-inline">Commandes</span></a>
                    <div class="collapse" id="submenu1" aria-expanded="false">
                        <ul class="flex-column pl-2 nav">
                            <li class="nav-item"><a class="nav-link py-0" href="./commandes.php"><i class="bi bi-bag-check"></i><span>Validation des commandes</span></a></li>
                            <li class="nav-item"><a class="nav-link py-0" href="./commandes_hist.php"><i class="bi bi-clock-history"></i><span>Historique</span></a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="./produits.php"><i class="bi bi-cart-check"></i> <span class="d-none d-sm-inline">Produits</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-truncate" href="./categories.php"><i class="bi bi-tags-fill"></i> <span class="d-none d-sm-inline">Categories</span></a>
                </li>
                <li class="nav-item"><a class="nav-link text-truncate" href="./clients.php"><i class="bi bi-person-circle"></i> <span class="d-none d-sm-inline">Clients</span></a></li>
            </ul>
        </div>


        <div class="col-12 text-center">

        <button class="btn btn-danger"> se decconecter</button>

        </div>

    </div>




</div>            <div class="col pt-4 ">
                <div class="container.fluid">

                    <h2>
                        <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>Page Produit
                    </h2>
                    <h6 class="hidden-sm-down">page pour ajouter , modifier ou supprimer un produit</h6>
                    <hr>
                    <!--Modal d'ajout du produit -->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                            Ajouter un produit
                                </button>
                            <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">AjoutProduit</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                <form action="#" method="get">
                                    <input type="hidden" name="action" value="Ajouter">
                            <div class="form-group">
                                <label>id_marque</label>
                                <input type="number" name="id_marque" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>id_categorie</label>
                                <input type="number" name="id_categorie" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>label</label>
                                <input type="text"name="label" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>prix_produit</label>
                                <input type="text" name="prix_produit" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-warning">Ajouter</button>
                            </form></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                                </div>
                            </div>
                            </div>
                        <br/> <br/>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                            Modifier un
                            </button>

                            <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <div class="modal-header">
                                    <h4 class="modal-title">ModifierProduit</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="modal-body">
                                <form action="#" method="get"> 
                                    <input type="hidden" name="action" value="Modifier">
                                     
                            <div class="form-group">
                                <label>id_produit</label>
                                <input type="text" class="form-control" name="id_produit" >
                            </div>
                            
                            <div class="form-group">
                                <label>label</label>
                                <input type="text" class="form-control" name="label" >
                            </div>
                            <div class="form-group">
                                <label>prix_produit</label>
                                <input type="text" class="form-control" name="prix_produit" >
                            </div>
                            <button type="submit" class="btn btn-warning">Modifier</button>
                            </form></div>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                                </div>
                            </div>
                            </div>
                        
                                            
                        


                        <table class="table table-hover" id="table_search">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">marque</th>
                                    <th scope="col">id_categorie</th>
                                    <th scope="col">label</th>
                                    <th scope="col">prixproduit</th>
                                    <th scope="col">Options</th>
                                    <!-- #TODO  view or mail client -->
                                </tr>
                            </thead>
                            <tbody id="table_body">

                            </tbody>
                            

                        <tr>
                        <?php foreach($produit as $produits): ?>
                        <td><?php  echo $produits['id_produit'] ?></td>
                        <td><?php  echo $produits['id_marque'] ;?></td>
                        <td><?php  echo $produits['id_categorie']; ?></td>
                        <td><?php  echo $produits['label']; ?></td>
                        <td><?php  echo $produits['prix_produit']; ?></td>
                        <td><a href="?action=Supprimer&id=<?php echo $produits['id_produit']?>">
                             <button type="submit" class="btn btn-danger">SUPPRIMER</button>
                    </a>    </td>
                        </tr>
                        <?php endforeach; ?>
                        </table>
                        
                    




              
               <!--   <form action="addProduit.php">
              
              <input type="text" name="prix" >
              <input type="text" name="label" > 
              <button>Ajouter </button>
              
              </form>
              
 <table border="1" width="100%">
              <tr><th>prix</th><th>label</th>
              <?php   foreach($rows as $row):  ?>
              <tr>
              <td><?php echo $row['prix_produit']; ?></td>
              <td><?php echo $row['label']; ?></td>
              <td><a href="DeleteProd.php?id=.."><button>SUPPRIMER</button></a>    </td>

              <td></td>
              </tr>
              <?php endforeach; ?>
              
              
            
              </table>
           
              <form action="ModifProduit.php">
              
              <input type="text" name="prix" >
              <input type="text" name="label" > 
              <button>Ajouter </button>
              
              </form>
-->
                </div>
        </div>
    </div>


</body>

</html>