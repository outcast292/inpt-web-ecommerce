<?php
                $connect=new PDO('mysql:host=localhost;dbname=ecommerce', 'root' , '');

                $sql="select label , prix_produit from produit";
                $stml=$connect->query($sql);
                $rows=$stml->fetchAll(PDO::FETCH_ASSOC);
                
                
                
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




</div>            <div class="col pt-4">
                <h2>
                    <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> Produit
                </h2>
                <hr>
      
              
              <form action="addProduit.php">
              
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

              <td></td>
              </tr>
              <?php endforeach; ?>
              
            
              </table>
           

                </div>
        </div>
    </div>


</body>

</html>