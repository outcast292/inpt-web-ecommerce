<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <style>


    </style>
</head>

<body>
    <div>
        <?php
        require_once "req/navbar.php";

        ?>
    </div>

    <div class="container ">
        <div class="jumbotron ">
            <div class="row">
                <div class="col-3 mt-4"></div>
                <div class="col-8 mt-4 mx-auto">
                    <h2 class="display-4">Inscription Client</h2>
                </div>
                <div class="col-2 mt-4"></div>
            </div>
            <div>
                <form class="col-12" id='form_signup'>
                    <div class="logins">
                        <div class='mt-2 row'>
                            <h2 class="display-6">Details de Connexion</h2>
                        </div>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-3">
                                    <h6>E-Mail: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="email" aria-label="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-3">
                                    <h6>Mot-de-Passe: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="password" aria-label="password" name="password" aria-describedby="passhint">
                                    <small id="passhint" class="form-text text-muted">Utiliser un mot-de-passe avec des lettres majuscules, miniscules, des symboles et des chiffres pour un maximum de securite</small>
                                </div>
                            </div>
                        </div>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-3">
                                    <h6>Confirmer Mot-de-Passe: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="password" aria-label="confirm_password" name="confirm_password">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="infos_clients">
                        <div class='mt-2 row'>
                            <h2 class="display-6">Details du Client</h2>
                        </div>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-2">
                                    <h6>Nom: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="text" aria-label="nom" name="nom">
                                </div>
                            </div>
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
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-3">
                                    <h6>Telephone: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="tel" aria-label="telephone" name="telephone">
                                </div>
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

                </form>
            </div>

        </div>
    </div>


    <div>

        <?php
        require_once "req/footbar.php";

        ?>
    </div>

</body>

</html>