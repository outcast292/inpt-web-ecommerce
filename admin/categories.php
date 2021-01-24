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

    <?php require "req/verify.php"; //proteger la page 
    ?>
    <style>
    
    </style>


</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php require "req/sidebar.php" ?>
            <div class="col pt-4">
                <h1>Catégories</h1>
                <br>

                <form id="form_search">

                    <h5 class="font-italic  text-secondary">Filtrer ?</h5>
                    <div class="row">
                        <div class="col-6">
                            <input class="form-control" list="datalistOptions" type="search" id="exampleDataList" placeholder="Type to search...">
                            <datalist id="datalistOptions">
                                <option value="Vetements">
                                <option value="Cosmétique">
                                <option value="Eléctronique">
                                <option value="Maison">
                                <option value="Animalerie">


                            </datalist>
                        </div>
                        <div class="col-2">
                            <button type="submit" id="submit_search" class="btn btn-dark ">Rechercher</button>
                        </div>
                        <div class="col-4">
                            <button data-toggle="modal" data-target="#modal_add" type="submit" class="btn btn-success " style="width: 100%;">Ajouter une nouvelle catégorie</button>
                        </div>
                    </div>
                </form>
                <br>


                <hr>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="table_add">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col-3">NUMERO</th>
                                <th scope="col-6">NOM</th>
                                <th scope="col-3">OPTIONS</th>

                            </tr>
                        </thead>
                        <tbody id="table_body">

                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
    <!-- Modal del -->
    <div class="modal fade" id="modal_del" tabindex="-1" aria-labelledby="modal_del" aria-hidden="true">
        <div class="modal-dialog modal-md ">
            <div class="modal-content" id="modal_content_del">

            </div>
        </div>
    </div>
    <!-- Modal modify-->
    <div class="modal fade" id="modal_modify" tabindex="-1" aria-labelledby="modal_modify" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="modal_content_modify">

            </div>
        </div>
    </div>
    <!-- Modal add-->
    <div class="modal fade" id="modal_add" tabindex="-1" aria-labelledby="modal_add" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content" id="modal_content_add">
                <form id="form_add">
                    <div class="modal-header">

                        <h5 class="modal-title text-warning" id="exampleModal">Ajouter une nouvelle catégorie</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="nom" class="form-control-label font-italic  text-secondary">Tapez le nom de la catégorie :</label>
                        <input type="text" name="nom_categorie" class="form-control" placeholder="Nom" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" id="submit_add">Ajouter</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        fetch("../php/categories/categories_read?").then(resp => resp.json()).then(json => {
            const data = json.data;
            data.forEach(element => {
                $("#table_body").append(`
                    <tr>
                       <td>${element.id_categorie}</td>
                       <td>${element.nom_categorie}</td>
                                    
                       <td>
                         <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            
                         <a class="dropdown-item" href="#" onclick='del(${element.id_categorie},"${element.nom_categorie}");'>Supprimer</a>
                                        
                         <a class="dropdown-item" href="#"  onclick='modify(${element.id_categorie},"${element.nom_categorie}");'>Modifier</a>
                         </div>
                       </td>
                                
                    </tr>`)
            });
        });
        $("#submit_add").click(function(event) {
            event.preventDefault();
            var dataform = $("#form_add").serialize();
            var dataform_array = $("#form_add").serializeArray();
            if (dataform.length > 0) {
                fetch("../php/categories/add?" + dataform).then(resp => resp.json()).then(json => {
                    const id_categorie = json.id_categorie;
                    const variable = dataform_array[0];
                    console.log(dataform_array);
                    $('#table_body').append(`
                        <tr>
                            <td>${id_categorie}</td>
                            <td>${variable.value}</td>
                            
                            <td>
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" onclick='del(${id_categorie},"${variable.value}");'>Supprimer</a>
                            <a class="dropdown-item" href="#" onclick='modify(${id_categorie},"${variable.value}");'>Modifier</a>
                            </div>
                            </td>
                        </tr>
                        `);
                    $('#form_cat').trigger("reset");


                }).catch(err => {
                    console.log(err);
                });
            }
        });

        function del(id_categorie, nom_categorie) {
            $('#modal_content_del').html(`
              
               <div class="modal-header">
                    
                    <h5 class="modal-title text-warning" id="exampleModal">Suppression de la catégorie N° ${id_categorie}</h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6 class="font-italic  text-secondary">Etes-vous sûr de vouloir supprimer cette catégorie?</h6>

                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-warning" id="submit_del" > Oui</button>
                     <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                </div>
                
                
                     `);
            $('#modal_del').modal('show');
            $("#submit_del").click(function(event) {
                event.preventDefault();
                confirmDel(id_categorie);

            });
        };

        function confirmDel(id_categorie) {
            fetch("../php/categories/del?id_categorie=" + id_categorie).then(resp => resp.json()).then(json => {
                const data = json.data;
            }).catch(err => {
                console.log(err);
            });
        }

        function modify(id_categorie, nom_categorie) {
            $('#modal_content_modify').html(`
            <div class="modal-header">
                    
                    <h5 class="modal-title text-warning" id="exampleModal">Modifier la catégorie N° ${id_categorie}</h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="nom" class="form-control-label font-italic  text-secondary">Changer le nom de la catégorie?</label>
                    <input type="text" name="nom_categorie" class="form-control" placeholder="Nouveau nom" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="submit-modify">Enregistrer</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                </div>
                
                     `);
            $('#modal_modify').modal('show');
            $("#submit_modify").click(function(event) {
                event.preventDefault();
                save(id_categorie);

            });
        };

        function save(id_categorie) {
            fetch("../php/categories/modify?id_categorie=" + id_categorie).then(resp => resp.json()).then(json => {
                const data = json.data;
            }).catch(err => {
                console.log(err);
            });
        }
        $("#submit_search").click(function(event) {
            event.preventDefault();
            var dataform = $("#form_search").serialize();
            if (dataform.length > 0) {
                fetch("../php/categories/search?" + dataform).then(resp => resp.json()).then(json => {
                    var data = json.data;
                   
                    $("#table_body").text('');
                    data.forEach((element, index) => {
                        $('#table_body').append(`
                        <tr>
                            <td>${index+1}</td>
                            <td>${element.nom_categorie}</td>
                            
                            <td>
                              <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            
                                   <a class="dropdown-item" href="#" onclick='del(${element.id_categorie},"${element.nom_categorie}");'>Supprimer</a>
                                        
                                    <a class="dropdown-item" href="#"  onclick='modify(${element.id_categorie},"${element.nom_categorie}");'>Modifier</a>
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