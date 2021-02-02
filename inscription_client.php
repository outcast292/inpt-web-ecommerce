<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMOIL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.slim.min.js"></script>

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
            <div class="col-11 m-1 alert alert-danger" hidden id="alert">
                erreur .merci de contacter l'administrateur
            </div>
            <div class="logins">
                <div class='mt-2 row'>
                    <h2 class="display-6">Details de Connexion</h2>
                </div>
                <div class='mt-2 row'>
                    <div class="form-row p-2 col">
                        <div class="pt-3 col-3">
                            <h6 class="ml-3">E-Mail: </h6>

                        </div>
                        <div class="mt-2 col">
                            <input class="form-control mr-sm-2" type="email" id="email_form" onchange="verify_email()" aria-label="email" name="email" required>
                            <div class="text-danger" hidden id="mail_not_valid">
                                un compte attaché e ce mail existe deja
                            </div>
                            <div class="text-danger" hidden id="mail_not_valid2">
                                ce mail n'est pas valide
                            </div>
                        </div>
                    </div>
                </div>
                <form class="col-12 " id='form_signup'>
                    <div class='mt-2 row'>
                        <div class="form-row p-2 col">
                            <div class="pt-3 col-3">
                                <h6>Mot-de-Passe: </h6>
                            </div>
                            <div class="mt-2 col">
                                <input class="form-control mr-sm-2" type="password" aria-label="password" name="mdp_client" aria-describedby="passhint" required>
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
                                <input class="form-control mr-sm-2" type="password" aria-label="confirm_password" required>
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
                                    <input class="form-control mr-sm-2" type="text" aria-label="nom" name="nom_client" required>
                                </div>
                            </div>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-2">
                                    <h6>Prenom: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="text" aria-label="prenom" name="prenom_client" required>
                                </div>
                            </div>
                        </div>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col">
                                    <h6>Date de Naissance: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="date" aria-label="nom" name="date_naissance">
                                </div>
                            </div>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-2">
                                    <h6>Sexe: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <select class="form-control" name="sexe">
                                        <option value="x">x</option>
                                        <option value="h">Homme</option>
                                        <option value="f">Femme</option>
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
                                    <textarea class="form-control" rows="3" name="adresse" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-3">
                                    <h6>Code Postal: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="text" aria-label="zipcode" name="code_postal" required>
                                </div>
                            </div>
                            <div class="form-row p-2 col">
                                <div class="pt-3 col-3">
                                    <h6>Telephone: </h6>
                                </div>
                                <div class="mt-2 col">
                                    <input class="form-control mr-sm-2" type="number" aria-label="telephone" name="tel_adresse_client" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 row">
                        <div class='col'></div>
                        <div class="ml-3 pt-2 col-8">
                            <button type="button" onclick="add_client()" id="submit_button" class="btn btn-outline-secondary btn-lg btn-block">Enregistrer</button>
                        </div>
                        <div class='col'></div>
                    </div>

                </form>
            </div>

        </div>
    </div>





    <div class="container-fluid">

        <?php
        require_once "req/footbar.php";

        ?>
    </div>

    <script>
        //TODO ADD EMAIL CHECK

        function check() {
            let valid = true;
            $('[required]').each(function() {
                if ($(this).is(':invalid') || !$(this).val()) {
                    valid = false;
                    $("#form_signup").addClass("was-validated");
                };
            })
            return valid;
        }


        function add_client() {

            if (check()) {
                verify_email().then(res => {
                    console.log("add" + res);
                    if (res) {
                        var dataform = $("#form_signup").serialize();
                        var email = $('#email_form').val();
                        console.log("test");
                        fetch("./php/clients/client_add?email=" + email + "&" + dataform).then(resp => resp.json()).then(json => {
                            if (json.code == 200) {
                                window.location.replace("index");
                            } else {
                                $("#alert").removeAttr("hidden");
                            }
                        }).catch(err => {
                            console.error(err);
                            $("#alert").removeAttr("hidden");

                        });
                    }
                })


            } else {
                $("#form_signup").addClass("has-validation");

            }
        }

        async function verify_email() {
            var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
            var val_email = $('#email_form');
            if (val_email.val().match(validEmail)) {

                var resp = await fetch("./php/clients/check_mail?email=" + val_email.val());
                var json = await resp.json();
                $("#mail_not_valid2").hide();
                var valid = json.email_valide;
                console.log("ver" + valid);
                if (valid) {
                    val_email.addClass("is-valid")
                    val_email.removeClass("is-invalid")
                    $("#mail_not_valid").hide();
                    return true;
                } else {
                    val_email.removeClass("is-valid")
                    val_email.addClass("is-invalid")
                    $("#mail_not_valid").removeAttr("hidden");
                    $("#mail_not_valid").show();
                    return false;
                }
            } else {
                alert('not valid')
                $("#mail_not_valid2").show();
                return false;

            }
        }
    </script>
</body>

</html>