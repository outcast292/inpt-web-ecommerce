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
        <div class="jumbotron">
            <div class="row mt-4 ">
                <div class="col-md-3 ">
                    <div class="list-group ">
                        <a href="infos.php" class="list-group-item list-group-item-action active">Profile</a>
                        <a href="commandes.php" class="list-group-item list-group-item-action">Commandes</a>
                        <a href="wishlist.php" class="list-group-item list-group-item-action">Wishlist</a>
                        <a href="statistiques.php" class="list-group-item list-group-item-action">Statistiques</a>


                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body m-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Votre Profile</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                        <div class="infos_clients">
                                            <div class='mt-2 row'>
                                                <div class="form-row p-2 col">
                                                    <div class="pt-3 col-2">
                                                        <h6>Nom: </h6>
                                                    </div>
                                                    <div class="mt-2 col">
                                                        <input class="form-control mr-sm-2" type="text" aria-label="nom" name="nom">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='mt-2 row'>
                                                <div class="form-row p-2 col">
                                                    <div class="pt-3 col-2">
                                                        <h6>Prenom: </h6>
                                                    </div>
                                                    <div class="mt-2 col">
                                                        <input class="form-control mr-sm-2" type="text" aria-label="prenom" name="prenom">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='mt-2 row'>
                                                <div class="form-row p-2 col">
                                                    <div class="pt-3 col">
                                                        <h6>Date de Naissance: </h6>
                                                    </div>
                                                    <div class="mt-2 col">
                                                        <input class="form-control mr-sm-2" type="date" aria-label="nom" name="nom">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='mt-2 row'>
                                                <div class="form-row p-2 col">
                                                    <div class="pt-3 col-2">
                                                        <h6>Sexe: </h6>
                                                    </div>
                                                    <div class="mt-2 col">
                                                        <select class="form-control">
                                                            <option>Homme</option>
                                                            <option>Femme</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='mt-2 row'>
                                                <div class="form-row p-2 col">
                                                    <div class="pt-3 col-2">
                                                        <h6>Adresse: </h6>
                                                    </div>
                                                    <div class="mt-2 col">
                                                        <textarea class="form-control" rows="3" name="adresse"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='mt-2 row'>
                                                <div class="form-row p-2 col">
                                                    <div class="pt-3 col-3">
                                                        <h6>Code Postal: </h6>
                                                    </div>
                                                    <div class="mt-2 col">
                                                        <input class="form-control mr-sm-2" type="text" aria-label="zipcode" name="zipcode">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='mt-2 row'>
                                                <div class="form-row p-2 col">
                                                    <div class="pt-3 col-3">
                                                        <h6>Telephone: </h6>
                                                    </div>
                                                    <div class="mt-2 col">
                                                        <input class="form-control mr-sm-2" type="tel" aria-label="telephone" name="telephone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-2 row">
                                                <div class='col'></div>
                                                <div class="ml-3 pt-2 col-8">
                                                    <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Enregistrer</button>
                                                </div>
                                                <div class='col'></div>
                                            </div>
                                        </div>
                                    </form>
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