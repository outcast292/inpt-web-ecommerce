<?php
                $connect=new PDO('mysql:host=localhost;dbname=ecommerce', 'root' , '');

              
                
                require_once "prodTest.php";

                
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
                    <p>
                        <button class="btn btn-secondary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <h5>AJOUTER UN PRODUIT</h5>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                    <form action="#" method="get">
                                    <input type="hidden" name="action" value="Ajouter">
                            <div class="form-group">
                                <h6>La marque :</h6>
                                <input type="text" name="nom_marque" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <h6>La categorie :</h6>
                                <input type="text" name="nom_categorie" class="form-control" >
                            </div>
                            <div class="form-group">
                            <h6>Label :</h6>
                                <input type="text"name="label" class="form-control" >
                            </div>
                            <div class="form-group">
                            <h6>Le prix :</h6>
                                <input type="text" name="prix_produit" class="form-control" >
                            </div>
                            <div class="mt-2 row">
                                    <div class='col-4'></div>
                                    <div class="ml-3 pt-2 col-4">
                                        <input type="submit" id="submit_search" class="btn btn-success btn-block  form-control" value="Ajouter">
                                    </div>
                                </div>

                     
                </form></div>
                            
                            </div>
                        
                        <table class="table table-hover" id="table_search">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Marque</th>
                                    <th scope="col">Categorie</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Options</th>
                                </tr>
                            </thead>
                            <tbody id="table_body">

                            </tbody>
                            

                        <tr>
                        <?php foreach($produit as $produits): ?>
                        <td><?php  echo $produits['id_produit'] ?></td>
                        <td><?php  echo $produits['nom_marque'] ;?></td>
                        <td><?php  echo $produits['nom_categorie']; ?></td>
                        <td><?php  echo $produits['label']; ?></td>
                        <td><?php  echo $produits['prix_produit']; ?></td>
                        <td>
                               
                                <a href="?action=Supprimer&id=<?php echo $produits['id_produit']?>"> Supprimer</a>
                               
                                
                        </td>
                        </tr>
                        <?php endforeach; ?>
                        </table>
                        
 
                        
                    
              
</body>

</html>