<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <script src="../js/jquery-3.5.1.slim.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/index.css">
    <style>


    </style>
</head>

<body>
    <div>
        <?php
        require_once "../req/navbar.php";

        ?>
    </div>

    <div class="container">
        <div class="jumbotron ">
            <div class="row mt-4">
                <div class="col-md-3 ">
                    <div class="list-group ">
                        <a href="infos.php" class="list-group-item list-group-item-action ">Profile</a>
                        <a href="commandes.php" class="list-group-item list-group-item-action">Commandes</a>
                        <a href="wishlist.php" class="list-group-item list-group-item-action">Wishlist</a>
                        <a href="statistiques.php" class="list-group-item list-group-item-action active">Statistiques</a>


                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Vos Statistiques</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Première Activté</label>
                                            <input type="text" class="form-control" readonly value="${first_commande}">
                                        </div>
                                        <div class="col-6">
                                            <label>Dernière Activité</label>
                                            <input type="text" class="form-control" readonly value="${last_commande}">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Montant d'Achat Maximum</label>
                                            <input type="text" class="form-control" readonly value="${maximum_spent}">
                                        </div>
                                        <div class="col-6">
                                            <label>Montant d'Achat Minimum</label>
                                            <input type="text" class="form-control" readonly value="${minimum_spent}">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Moyenne d'Achat</label>
                                            <input type="text" class="form-control" readonly value="${avg_spent}">
                                        </div>
                                        <div class="col-6">
                                            <label>Nombre Total de Commandes</label>
                                            <input type="text" class="form-control" readonly value="${nbr_commande}">
                                        </div>
                                    </div><br>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>

        <?php
        require_once "../req/footbar.php";

        ?>
    </div>

</body>

</html>