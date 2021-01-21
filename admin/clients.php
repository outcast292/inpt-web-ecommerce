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
                    <h1><a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>Clients</h1>
                    <h6 class="hidden-sm-down">Page pour visualiser les details des clients</h6>
                    <hr>

                    <p>
                        <button class="btn btn-secondary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <h5>RECHERCHE</h5>
                        </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <form class="col-12" id='form_search'>

                            <div class='filtres'>
                                <div class='mt-2 row'>
                                    <div class="form-row p-2 col-12">
                                        <div class="pt-3 col-2">
                                            <h6>Par mots-cles: </h6>
                                        </div>
                                        <div class="mt-2 col-10">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Mots-cles" aria-label="Search" name="search">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 row ">
                                    <div class="form-row p-2 col-12">
                                        <div class="mt-4 pt-3 col-3">
                                            <h6>Periode d'activite du client: </h6>
                                        </div>
                                        <div class="col-2">
                                            <label for="from_date">Date debut:</label>
                                            <input type="date" name="from_date" class="form-control" id="from_date">
                                        </div>
                                        <div class="ml-3 col-2">
                                            <label for="to_date">Date fin:</label>
                                            <input type="date" name="to_date" class="form-control"  id="to_date" value="<?php echo  date("Y-m-d") ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2 row">
                                    <div class="form-row p-2 col-12">
                                        <div class="mt-4 col-3">
                                            <h6>Nombres de commandes: </h6>
                                        </div>
                                        <div class="col-3">
                                            <div class="mcol-3 mt-3">
                                                <div class="input-group">
                                                    <input type="number" aria-label="min" name='minimum_commande' class="form-control" placeholder="Minimum" min="0">
                                                    <input type="number" aria-label="max" name='maximum_commande' class="form-control" placeholder="Maximum" min="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2 row">
                                    <div class="form-row p-2 col-12">
                                        <div class="mt-4 col-3">
                                            <h6>Montant total depense: </h6>
                                        </div>
                                        <div class="col-3">
                                            <div class="mcol-3 mt-3">
                                                <div class="input-group">
                                                    <input type="number" aria-label="min" name='minimum_spent' class="form-control" placeholder="Minimum" min="0">
                                                    <input type="number" aria-label="max" name='maximum_spent' class="form-control" placeholder="Maximum" min="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2 row">
                                    <div class='col-4'></div>
                                    <div class="ml-3 pt-2 col-4">
                                        <input type="submit" id="submit_search" class="btn btn-success btn-block  form-control" value="Confirmer">
                                    </div>
                                </div>

                        </form>
                    </div>


                </div>



                <div class="mt-4">
                    <div class="alert alert-info" id='div_nbr' hidden>
                        Nombre de clients trouvés : <span id="nbr_clt"></span>
                    </div>

                    <table class="table table-hover" id="table_search">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">nom et prenom</th>
                                <th scope="col">nombre de commandes</th>
                                <th scope="col">derniere activite</th>
                                <th scope="col">Options</th>
                                <!-- details ou email-->
                            </tr>
                        </thead>
                        <tbody id="table_body">

                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>
    <!--modal-->
    <div class="modal  fade" id="modal_details" tabindex="-1" aria-labelledby="modal_details" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="modal_content">

            </div>
        </div>
    </div>

    <script>
        function show_details(id_client, nom_client, nbr_commande, email, tel_client, date_naissance, sexe,first_commande, last_commande, minimum_spent, maximum_spent, avg_spent) {

            $('#modal_content').html(`
                     <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">Client N° ${id_client}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 col-12 row">
                        <div class="col-auto">

                            <h6>
                                Informations Clients
                            </h6>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>Nom et Prenom</label>
                            <input type="text" class="form-control" readonly value="${nom_client}">

                        </div>
                        <div class="col-6">
                            <label>Telephone</label>
                            <input type="text" class="form-control" readonly value="${tel_client}">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-6">
                            <label>Date de Naissance</label>
                            <input type="text" class="form-control" readonly value="${date_naissance}">

                        </div>
                        <div class="col-6">
                            <label>Email</label>
                            <input type="text" class="form-control" readonly value="${email}">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-6">
                            <label>Sexe</label>
                            <input type="text" class="form-control" readonly value="${sexe}">

                        </div>
                        
                    </div><br>
                    <div class="mt-2 col-12 row">
                        <div class="col-auto">

                            <h6>
                                Statistiques
                            </h6>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label>Premiere activte</label>
                            <input type="text" class="form-control" readonly value="${first_commande}">

                        </div>
                        <div class="col-6">
                            <label>Derniere activite</label>
                            <input type="text" class="form-control" readonly value="${last_commande}">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-6">
                            <label>Achat Maximum</label>
                            <input type="text" class="form-control" readonly value="${maximum_spent}">

                        </div>
                        <div class="col-6">
                            <label>Achat Minimum</label>
                            <input type="text" class="form-control" readonly value="${minimum_spent}">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-6">
                            <label>Moyenne d'achat</label>
                            <input type="text" class="form-control" readonly value="${avg_spent}">

                        </div>
                        <div class="col-6">
                            <label>Nombre total de commandes</label>
                            <input type="text" class="form-control" readonly value="${nbr_commande}">
                        </div>
                    </div><br>
                    <div class="mt-2 col-12 row">
                        <div class="col-auto">

                            <h6>
                                Dernieres Commandes
                            </h6>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
                </div>     `);

            $('#modal_details').modal('show');

        };

        $("#submit_search").click(function(event){
            event.preventDefault();
            search();
        });

        function search() {
            var dataform = $("#form_search :input[value!='']").serialize();
            fetch("../php/client/client_read?"+dataform).then(resp => resp.json()).then(json => {
                var data = json.data;
                $("#table_body").text('');
                data.forEach((element, index) => {
                    $('#table_body').append(`
                        <tr class=" ${element.valide==1? "table-success":element.valide==-1?"table-danger":"" }">
                            <td>${index+1}</td>
                            <td>${element.nom_client}</td>
                            <td>${element.nbr_commande}</td>
                            <td>${element.last_commande}</td>
                            <td>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPTIONS</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           
                                <a class="dropdown-item" href="#" onclick='show_details(${element.id_client},"${element.nom_client}",${element.nbr_commande},"${element.email}","0${element.tel_client}","${element.date_naissance}","${element.sexe}","${element.first_commande}","${element.last_commande}",${element.minimum_spent},${element.maximum_spent},${element.avg_spent});'>Details</a>
                            
                                <a class="dropdown-item" href="mailto:${element.email}">Envoyer email</a>
                                <a class="dropdown-item" href="tel:${element.tel_client}">Appeler</a>
                            </div>
                            </td>
                        </tr>
                        `);
                });
                $("#nbr_clt").text(data.length);
                $("#div_nbr").removeAttr("hidden");

            }).catch(err => {
                console.log(err);
            });
        }
        search();
    </script>
</body>

</html>