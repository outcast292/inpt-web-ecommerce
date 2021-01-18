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

    <script>
        $("#submit_search").click(function(event) {
            event.preventDefault();
            var dataform = $("#form_search").serialize();
            if (dataform.length > 0) {
                fetch("../php/commandes/commandes_read?" + dataform).then(resp => resp.json()).then(json => {
                    var data = json.data;
                    $("#table_body").text('');
                    data.forEach((element, index) => {
                        $('#table_body').append(`
                        <tr>
                            <td>${index+1}</td>
                            <td>${element.nom_client}</td>
                            <td>${element.date_commande}</td>
                            <td>${element.etat_actuell}</td>
                            <td>${element.prix_commande}</td>
                            <td>test</td>
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