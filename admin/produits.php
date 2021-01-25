<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>

    <script src="../js/jquery-3.5.1.slim.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap-select.min.js"></script>
    <script src="../js/i18n/defaults-fr_FR.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/admin/sidebar.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/navbar.css" rel="stylesheet">
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


                    <form id="form_search">

                        <h5 class="font-italic  text-secondary">Filtrer ?</h5>
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="search" id="search_categories" placeholder="Type to search...">

                            </div>
                            <div class="col-3">
                                <button type="button" onclick="search(true)" class="btn btn-dark btn-block ">Rechercher</button>
                            </div>
                            <div class="col-3">
                                <button onclick="add_modal_show();" type="button" class="btn btn-success " style="width: 100%;">Ajouter une nouvelle catégorie</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div id="msg" class="mt-2">

                </div>
                <div class="mt-4 ">
                    <div class="row">
                        <div class="alert alert-info col-10 ml-1" id='div_nbr' hidden>
                            Nombre de Produits Trouvés : <span id="nbr_prd"></span>
                        </div>

                    </div>
                    <br>


                    <table class="table table-hover" id="table_search">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Label</th>
                                <th scope="col">Marque</th>
                                <th scope="col">Categorie</th>
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
        var marques;
        var categories;
        fetch("../php/brands/brands_read").then(resp => resp.json()).then(json => {
            marques = json.data;

        }).catch(err => {
            console.log(err);
        });
        fetch("../php/categories/categories_read    ").then(resp => resp.json()).then(json => {
            categories = json.data;
        }).catch(err => {
            console.log(err);
        });



        function add_modal_show() {
            $('#modal_content').html(`
                     <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal">AJOUTER PRODUIT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <div class="modal-body">
                        <form onsubmit="add_product()" id='form_add_product'>                          
                            <div class="form-group">
                                <label for="label"> Label :</label>

                                <input type="text" id="label_add" name="label" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="prix_produit">Le prix :</label>
                                <input type="number"  id="prix_produit_add" name="prix_produit"  class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="id_marque">La marque :</label>
                                <select class="form-control selectpicker" name="id_marque" id="id_marque_add" data-live-search="true" required>
                                <option data-tokens="" selected value disabled></option>
                                ${marques.map(element => `<option value="${element.id_marque}">${element.nom_marque}</option>`)}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_categorie">La categorie :</label>
                                <select class="form-control selectpicker" name="id_categorie" id="id_categorie_add" data-live-search="true" required>       
                                <option data-tokens="" selected value disabled></option>
                                ${categories.map(element => `<option value="${element.id_categorie}" >${element.nom_categorie}</option>`)}</select>
                            </div>
                            <div class="form-group">
                                <label for="description_produit">Description :</label>
                                <textarea class="form-control" name="description_produit" id="description_produit"></textarea>
                                
                            </div>      
                            <div class="alert alert-danger alert-dismissible fade show" id="alert_add" hidden>
                                un ou plusieurs champs sont vides
                            </div>
                            
                        </form>
                </div>
                    
                <div class="modal-footer">
                                <input type="submit" onclick="add_product();" class="btn btn-success"  form-control" value="Confirmer Ajout">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FERMER</button>               
                </div>
                </div>`);
            $('.selectpicker').selectpicker();
            $('#modal_details').modal('show');
        };

        function add_product() {
            if ($("#label_add").val() != "" && $("#prix_produit_add").val() != "" && $("#id_categorie_add").val() != null && $("#id_marque_add").val() != null) {
                var dataform = $("#form_add_product").serialize();
                fetch("../php/products/insert_product?" + dataform).then(resp => resp.json()).then(json => {
                    const id_produit = json.id_produit;
                    const categorie = categories.find(el => el.id_categorie == $("#id_categorie_add").val());
                    const marque = marques.find(el => el.id_marque == $("#id_marque_add").val());
                    $('#table_body').append(`
                        <tr>
                            <td>${id_produit}</td>
                            <td>${$("#label_add").val()}</td>
                            <td>${marque.nom_marque}</td>
                            <td>${categorie.nom_categorie}</td>
                            <td>${parseFloat($("#prix_produit_add").val()).toFixed(2)}</td>
                            <td>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPTIONS</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           
                                <a class="dropdown-item" href="#" onclick='modifier(${id_produit});'>MODIFIER</a>
                                <a class="dropdown-item" href="#" onclick='supprimer(${id_produit});'>SUPPRIMER </a>
                            </div>
                            </td>
                        </tr>
                        `);

                    $('#modal_details').modal('hide');
                    $("#form_add_product").reset();
                    $("#nbr_prd").text(parseInt($("#nbr_prd").text()) + 1);

                }).catch(err => {
                    console.log(err);
                });
            } else {
                $("#alert_add").removeAttr("hidden");
            }

        };

        function search() {
            fetch("../php/products/read_products?search_admin=").then(resp => resp.json()).then(json => {
                var data = json.data;
                $("#table_body").text('');
                data.forEach((element) => {
                    $('#table_body').append(`
                        <tr>
                            <td>${element.id_produit}</td>
                            <td>${element.label}</td>
                            <td>${element.nom_marque}</td>
                            <td>${element.nom_categorie}</td>
                            <td>${element.prix_produit.toFixed(2)}</td>
                            <td>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OPTIONS</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           
                                <a class="dropdown-item" href="#" onclick='modifier(${element.id_produit});'>MODIFIER</a>
                                <a class="dropdown-item" href="#" onclick='supprimer(${element.id_produit},"${element.label}");'>SUPPRIMER </a>
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

        function supprimer(id_produit, nom_produit) {
            $('#modal_content').html(`
            <div class="modal-header">                  
                    <h5 class="modal-title " >Suppression du produit N° ${id_produit}</h5>          
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Etes-vous sûr de vouloir supprimer le produit "<b>${nom_produit}"</b>?</p>
                </div>
                <div class="modal-footer d-flex justify-content-around">
                     <button type="button" class="btn btn-danger"  onclick="delete_categorie(${id_produit},'${nom_produit}')" >oui</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">non</button>
                </div>    `);
            $('#modal_details').modal('show');
        };

        function delete_categorie(id_produit, nom_produit) {
            fetch("../php/products/delete_product?id_produit=" + id_produit).then(resp => resp.json()).then(json => {
                const data = json.data;
                $("#modal_details").modal("hide");

                $("#msg").html(`
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>supprimée!</strong> . le produit ${nom_produit} a ete supprimée 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>    
                `)
                search();

            }).catch(err => {
                console.log(err);
            });
        }
        search();
    </script>
</body>

</html>