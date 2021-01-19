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

    <?php require "req/verify.php";  ?>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php require "req/sidebar.php" ?>
            <div class="col pt-4 ">
                <div class="container.fluid">

                    <h2>
                        <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>Historique des commandes
                    </h2>
                    <h6 class="hidden-sm-down">page pour visualiser l'historique des commandes</h6>
                    <hr>

                    <div class="mt-2 row">
                        <form class="col-12" id="form_search">
                            <div class="form-row p-2 col-12">
                                <div class="col-2">
                                    <label for="from_date">Date debut</label>
                                    <input type="date" name="from_date" class="form-control" value="<?php echo  date("Y-m-d") ?>" id="from_date">
                                </div>
                                <div class="ml-3 col-2">
                                    <label for="to_date">Date debut</label>

                                    <input type="date" name="to_date" class="form-control" value="<?php echo  date("Y-m-d") ?>" id="to_date">
                                </div>
                                <div class="ml-3 col-2">
                                    <label for="submit_search">.</label>

                                    <input type="submit" id="submit_search" class="btn btn-success btn-block  form-control">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Launch demo modal
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mt-4">
                        <div class="alert alert-info" hidden>
                            Nombre des commandes trouvées : <span id="nbr_cmnd"></span>
                        </div>

                        <table class="table table-hover" id="table_search">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Date Heure</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col">Montant</th>
                                    <th scope="col">Options</th>
                                    <!-- #TODO  view or mail client -->
                                </tr>
                            </thead>
                            <tbody id="table_body">

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal  fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">Commande N° 5</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 col-12 row">
                        <div class="col-auto">

                            <h6>
                                informations Clients
                            </h6>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>Nom Client</label>
                            <input type="text" class="form-control" readonly value="5000">

                        </div>
                        <div class="col-6">
                            <label>telephone</label>
                            <input type="text" class="form-control" readonly value="0666666">
                        </div>
                    </div>
                    <div class="mt-2 col-12 row">
                        <div class="col-auto">
                            <h6>
                                informations Commande
                            </h6>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>valeur de la commande</label>
                            <input type="text" class="form-control" readonly value="rezr zerez rez r">

                        </div>
                        <div class="col-6">
                            <label>date heure</label>
                            <input type="date" class="form-control" readonly value="0666666">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>statut de la commande</label>
                            <input type="text" class="form-control" readonly value="client1">

                        </div>
                        <div class="col-6">
                            <label>date de statut</label>
                            <input type="text" class="form-control" readonly value="0666666">
                        </div>
                    </div>
                    <div class="mt-2 col-12 row">
                        <div class="col-auto">
                            <h6>
                                contenu commandes
                            </h6>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-1">
                            <table class="table table-hover" id="table_search">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Produit</th>
                                        <th scope="col">qtt</th>
                                        <th scope="col">prix unit</th>
                                        <th scope="col">total</th>
                                    </tr>
                                </thead>
                                <tbody id="table_body">

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function show_details(id_commande) {

        };
        $("#submit_search").click(function(event) {
            event.preventDefault();
            var dataform = $("#form_search").serialize();
            if (dataform.length > 0) {
                fetch("../php/commandes/commandes_read?" + dataform).then(resp => resp.json()).then(json => {
                    var data = json.data;
                    $("#table_body").text('');
                    data.forEach((element, index) => {
                        $('#table_body').append(`
                        <tr class=" ${element.valide==1? "table-success":element.valide==-1?"table-danger":"" }">
                            <td>${index+1}</td>
                            <td>${element.nom_client}</td>
                            <td>${element.date_commande}</td>
                            <td>${element.etat_actuell}</td>
                            <td>${element.prix_commande}</td>
                            <td>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" onclick="show_details(${element.id_commande},${element.nom_client},${element.nom_client},)">Voir Details</a>
                                <a class="dropdown-item" href="mailto:${element.email}">emailer client</a>
                                <a class="dropdown-item" href="tel:${element.tel_client}">telephoner client</a>
                            </div>
                            </td>
                        </tr>
                        `);
                    });
                }).catch(err => {
                    console.log(err);
                });
            }
        });
    </script>


</body>

</html>