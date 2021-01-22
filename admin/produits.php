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
            <div class="col pt-4">
                <div class="container.fluid">
                    <h1><a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> Produits</h1>
                    <h6 class="hidden-sm-down">Page pour ajouter, modifier ou supprimer un produit</h6>
                    <hr>
                    <p>
                        <button class="btn btn-secondary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <h5>AJOUTER UN PRODUIT</h5>
                        </button>
                    </p>

                    <div class="collapse" id="collapseExample">
                        <form action="#" method="get" id='form_search'>
                            <input type="hidden" name="action" value="Ajouter">
                            <div class="form-group">
                                <h6>La marque :</h6>
                                <input type="text" name="nom_marque" class="form-control">
                            </div>

                            <div class="form-group">
                                <h6>La categorie :</h6>
                                <input type="text" name="nom_categorie" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6>Label :</h6>
                                <input type="text" name="label" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6>Le prix :</h6>
                                <input type="text" name="prix_produit" class="form-control">
                            </div>
                            <div class="mt-2 row">
                                <div class='col-4'></div>
                                <div class="ml-3 pt-2 col-4">
                                    <input type="submit" id="submit_search" class="btn btn-success btn-block  form-control" value="Ajouter">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="alert alert-info" id='div_nbr' hidden>
                        Nombre de Produits Trouvés : <span id="nbr_prd"></span>
                    </div>

                    <table class="table table-hover" id="table_search">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Marque</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">Label</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Options</th>
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
        function ajouter() {
            var dataform = $("#form_search :input[value!='']").serialize();
            fetch("../php/products/products_insert?" + dataform).then(resp => resp.json()).then(json => {
            }).catch(err => {
                console.log(err);
            });
        };

        function modifier(id_produit) {
            $('#modal_content').html(`
                     <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">MODIFICATION DU PRODUIT N° ${id_produit}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="col-12" id='form_modify'>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col-12">
                                <div class="pt-3 col-2">
                                    <h6>Label: </h6>
                                </div>
                                <div class="mt-2 col-10">
                                    <input class="form-control mr-sm-2" type="search" aria-label="Search" name="label" required>
                                </div>
                            </div>
                        </div>
                        <div class='mt-2 row'>
                            <div class="form-row p-2 col-12">
                                <div class="pt-3 col-2">
                                    <h6>Prix: </h6>
                                </div>
                                <div class="mt-2 col-10">
                                    <input class="form-control mr-sm-2" type="search" aria-label="Search" name="prix_produit" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 row">
                            <div class='col-4'></div>
                            <div class="ml-3 pt-2 col-4">
                                <input type="submit" id="submit_modify" class="btn btn-success btn-block  form-control" value="Confirmer">
                            </div>
                        </div>
                    </form>
                </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FERMER</button>
                </div>
                </div>     `);
                $('#modal_details').modal('show');
            $("#submit_modify").click(function(event) {
                event.preventDefault();
                confirm_modifier(id_produit);
            });

        };

        function confirm_modifier(id_produit) {
            var dataform = $("#form_modify :input[value!='']").serialize();
            fetch("../php/products/products_modify?id_produit=" + id_produit + "&" + dataform).then(resp => resp.json()).then(json => {
                $('#modal_details').modal('hide');
            }).catch(err => {
                console.log(err);
            });
            search();
        };

        function supprimer(id_produit) {
            $('#modal_content').html(`
                     <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">SUPPRESSION DU PRODUIT N° ${id_produit}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="col-12" id='form_delete'>
                        <div class="mt-2 row">
                            <div class='col-4'></div>
                            <div class="ml-3 pt-2 col-4">
                                <input type="submit" id="submit_delete" class="btn btn-success btn-block  form-control" value="Confirmer Suppression">
                            </div>
                        </div>
                    </form>
                </div>
                    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FERMER</button>
                </div>
                </div>     `);
                $('#modal_details').modal('show');
            $("#submit_delete").click(function(event) {
                event.preventDefault();
                confirm_supprimer(id_produit);
            });
        };

        function confirm_supprimer(id_produit) {
            fetch("../php/products/products_delete?id_produit=" + id_produit).then(resp => resp.json()).then(json => {
                $('#modal_details').modal('hide');
            }).catch(err => {
                console.log(err);
            });
            search();
        };

        $("#submit_search").click(function(event) {
            event.preventDefault();
            ajouter();
            search();
        });

        function search() {
            fetch("../php/products/products_read").then(resp => resp.json()).then(json => {
                var data = json.data;
                $("#table_body").text('');
                data.forEach((element) => {
                    $('#table_body').append(`
                        <tr class=" ${element.valide==1? "table-success":element.valide==-1?"table-danger":"" }">
                            <td>${element.id_produit}</td>
                            <td>${element.nom_marque}</td>
                            <td>${element.nom_categorie}</td>
                            <td>${element.label}</td>
                            <td>${element.prix_produit.toFixed(2)}</td>
                            <td>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPTIONS</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           
                                <a class="dropdown-item" href="#" onclick='modifier(${element.id_produit});'>MODIFIER</a>
                                <a class="dropdown-item" href="#" onclick='supprimer(${element.id_produit});'>SUPPRIMER </a>
                            </div>
                            </td>
                        </tr>
                        `);
                });
                $("#nbr_prd").text(data.length);
                $("#div_nbr").removeAttr("hidden");

            }).catch(err => {
                console.log(err);
            });
        }
        search();
    </script>
</body>

</html>