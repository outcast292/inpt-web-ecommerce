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
                <h2>
                    <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a> Utilisateurs
                </h2>
                <hr>
                <h4 style="display: inline;">Nombre d'utilisateurs : <span id="user_number"></span></h4>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModal">Ajouter un utilisateur</button>
                </div>
                <br><br><br><br>
                <div id="alert">
                </div>
                <!-- Modal -->
                <div class="modal  fade" id="modal_details" tabindex="-1" aria-labelledby="modal_details" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content" id="modal_content">
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id_user</th>
                            <th scope="col">name_user</th>
                            <th scope="col">prenom_user</th>
                            <th scope="col">email_user</th>
                            <th scope="col">is_admin</th>
                            <th scope="col">tel_user</th>
                            <th scope="col">fonction</th>
                            <th scope="col">option</th>
                        </tr>
                    </thead>
                    <tbody id="table_body">
                    </tbody>
                </table>
                <br><br><br>
                <!-- Modal adding-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="addUser" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body container-fluid">
                                <div id="alertModal">
                                </div>
                                <form action="" class="form row" id="form_add">
                                    <div class="form-label-group col-6">
                                        <label for="inputNom">Nom</label>
                                        <input type="text" name="nom" id="inputNom" class="form-control" placeholder="Nom" required autofocus>
                                    </div>
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Prenom</label>
                                        <input type="text" name="prenom" id="inputPrenom" class="form-control" placeholder="Prenom" required autofocus>
                                    </div><br>
                                    <div class="form-label-group col-12">
                                        <label for="inputEmail">Adresse email</label>
                                        <input type="email" name="mail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                    </div><br>
                                    <div class="form-label-group col-6">
                                        <label for="inputNom">mot de passe </label>
                                        <input type="password" name="mdp" id="inputNom" class="form-control" placeholder="mot de passe" required autofocus>
                                    </div>
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Confirmer le mot de passe </label>
                                        <input type="password" name="mdp_conf" id="inputPrenom" class="form-control" placeholder="confirmer le mot de passe" required autofocus>
                                    </div><br>
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Telephone</label>
                                        <input type="number" name="tel" id="inputTelephone" class="form-control" placeholder="Telephone" required autofocus>
                                    </div><br>
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Fonction</label>
                                        <input type="text" name="fonction" id="inputFonction" class="form-control" placeholder="Fonction" required autofocus>
                                    </div><br>
                                    <div class="form-label-group col-12">
                                        <label for="inputEmail">Admin:</label>
                                        <input type="radio" name="admin" id="inputadmin" checked value="0">non |
                                        <input type="radio" name="admin" id="inputadmin" value="1">oui
                                    </div><br>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button class="btn btn-success" type="button" name="submit" onclick="add_user()">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal password-->
                <div class="modal fade" id="mdp" tabindex="-1" role="changemdp" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content" id="mdp_body">

                        </div>
                    </div>
                </div>
                <!-- Modal changing-->
                <div class="modal fade" id="change" tabindex="-1" role="changeUser" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" id="modal_content_changing">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function voir_mdp(id) {
            $('#mdp_body').html(`
            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">changer le mot de passe</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body container-fluid">
                                <div id="alertModalpwd">
                                </div>
                                <form action="" class="form row" id="form_pwd">
                                    <div class="form-label-group col-6">
                                        <label for="inputNom">Nouveau mot de passe </label>
                                        <input type="password" name="mdp" id="inputNom" class="form-control" placeholder="mot de passe" required autofocus>
                                    </div>
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Confirmer le mot de passe </label>
                                        <input type="password" name="mdp_conf" id="inputPrenom" class="form-control" placeholder="confirmer le mot de passe" required autofocus>
                                    </div><br>

                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button class="btn btn-success" type="button" name="submit" onclick="modify_password(${id})">modifier</button>
                                </div>
                            </div>
                            `);
            $('#mdp').modal('show');
        }

        function modify_password(id) {
            var dataform = $("#form_pwd").serialize();
            var dataformarray = $("#form_pwd").serialize();
            fetch("../php/utilisateurs/user_update_pwd?id=" + id + '&' + dataform).then(resp => resp.json()).then(json => {

                if (json.code == 200) {
                    $("#alert").text('');
                    $("#alert").append(`
                    <div class="alert alert-success"  >
                    <i class="bi bi-check-all"></i></i> Mot de passe utilisateur ${id} modifié
                        </div>`)
                    $('#mdp').modal('hide');
                } else if (json.code == 401) {
                    $("#alertModalpwd").text('');
                    $("#alertModalpwd").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi  bi-x-octagon mr-2"></i></i> ${json.msg}
                        </div>`)
                } else if (json.code == 402) {
                    $("#alertModalpwd").text('');
                    $("#alertModalpwd").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi  bi-x-octagon mr-2"></i></i> ${json.msg}
                        </div>`)
                } else if (json.code == 403) {
                    $("#alertModalpwd").text('');
                    $("#alertModalpwd").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi  bi-x-octagon mr-2"></i></i> ${json.msg}
                        </div>`)
                }
            });
        }

        function update_user(id) {
            var dataform = $("#form_change").serialize();
            fetch("../php/utilisateurs/user_update?id=" + id + '&' + dataform).then(resp => resp.json()).then(json => {
                if (json.code == 200) {
                    get_data();
                    $("#alert").text('');
                    $("#alert").append(`
                    <div class="alert alert-success"  >
                    <i class="bi bi-check-all"></i></i> Utilisateur ${id} modifié
                        </div>`)
                }
            });
        }



        function see_user(id) {
            fetch("../php/utilisateurs/user_read").then(resp => resp.json()).then(json => {
                const data = json.data;
                var id_choosen;
                data.forEach((element, index) => {
                    if (element.id_user == id) {
                        id_choosen = index;
                    }
                })
                $('#modal_content_changing').html(`
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel">modifier l'utilisateur ${id}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body container-fluid">
                                <form action="" id="form_change" class="form row" method="post">
                                
                                    <div class="form-label-group col-6">
                                        <label for="inputNom">Nom</label>
                                        <input type="text" name="nom" id="inputNom" class="form-control" placeholder="Nom" value="${data[id_choosen].nom_user}" required autofocus>
                                    </div>
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Prenom</label>
                                        <input type="text" name="prenom" id="inputPrenom" class="form-control" placeholder="Prenom" value="${data[id_choosen].prenom_user}" required autofocus>
                                    </div><br>
                                    <div class="form-label-group col-12">
                                        <label for="inputEmail">Adresse email</label>
                                        <input type="email" name="mail" id="inputEmail" class="form-control" placeholder="Email address" value="${data[id_choosen].email_user}" required autofocus>
                                    </div><br>
                                    
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Telephone</label>
                                        <input type="number" name="tel" id="inputTelephone" class="form-control" placeholder="Telephone" value="${data[id_choosen].tel_user}" required autofocus>
                                    </div><br>
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Fonction</label>
                                        <input type="text" name="fonction" id="inputFonction" class="form-control" placeholder="Fonction" value="${data[id_choosen].fonction}" required autofocus>
                                    </div><br>
                                    
               
                                        <div class="form-label-group col-12">
                                        <label for="inputEmail">Admin:</label>
                                        <input type="radio" name="admin" id="inputadmin" ${data[id_choosen].is_admin==1 ? "" : 'checked'} value="0">non |
                                        <input type="radio" name="admin" id="inputadmin" ${data[id_choosen].is_admin==1 ? "checked" : ''} value="1">oui
                                    </div><br>
                                    </form>
                                    <div class="modal-footer ">
                                        
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="update_user(${id})">modifier</button>
                                    </div>
                                
                            </div>`)
                $('#change').modal('show');
            })
        }




        function delete_confirmation(id) {
            $('#modal_content').html(`
                     <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalsup">Suppression </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Etes-vous sures de supprimer l'utilisateur n° ${id} ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="delete_user(${id})">Supprimer</button>
                </div>
                     `);
            $('#modal_details').modal('show')
        }



        function delete_user(id) {
            fetch("../php/utilisateurs/user_delete?id=" + id).then(resp => resp.json()).then(json => {
                if (json.code == 200) {
                    get_data();
                    $("#alert").text('');
                    $("#alert").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi bi-check-all"></i></i> Utilisateur ${id} supprimé
                        </div>`)
                }
            }).catch(err => console.log(err));
        }



        function add_user() {
            var dataform = $("#form_add").serialize();
            fetch("../php/utilisateurs/user_add?" + dataform).then(resp => resp.json()).then(json => {
                if (json.code == 200) {
                    get_data();
                    $("#alert").text('');
                    $("#alert").append(`
                    <div class="alert alert-success"  >
                    <i class="bi bi-check-all"></i></i>utilisateur ajouté !!
                        </div>`)
                    $('#exampleModal').modal('hide')
                } else if (json.code == 401) {
                    get_data();
                    $("#alertModal").text('');
                    $("#alertModal").append(`
                    
                    <div class="alert alert-danger"  >
                    <i class="bi bi-x-octagon mr-2"></i>${json.msg}
                        </div>`)
                } else if (json.code == 402) {
                    get_data();
                    $("#alertModal").text('');
                    $("#alertModal").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi bi-x-octagon mr-2"></i>${json.msg}
                        </div>`)
                } else if (json.code == 403) {
                    get_data();
                    $("#alertModal").text('');
                    $("#alertModal").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi bi-x-octagon mr-2"></i>${json.msg}
                        </div>`)
                } else if (json.code == 404) {
                    get_data();
                    $("#alertModal").text('');
                    $("#alertModal").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi bi-x-octagon mr-2"></i>${json.msg}
                        </div>`)
                }else if (json.code == 405) {
                    get_data();
                    $("#alertModal").text('');
                    $("#alertModal").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi bi-x-octagon mr-2"></i>${json.msg}
                        </div>`)
                }else if (json.code == 406) {
                    get_data();
                    $("#alertModal").text('');
                    $("#alertModal").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi bi-x-octagon mr-2"></i>${json.msg}
                        </div>`)
                }else if (json.code == 407) {
                    get_data();
                    $("#alertModal").text('');
                    $("#alertModal").append(`
                    <div class="alert alert-danger"  >
                    <i class="bi bi-x-octagon mr-2"></i>${json.msg}
                        </div>`)
                }
            })
        }



        $(document).ready(get_data(event));

        function get_data(event) {
            fetch("../php/utilisateurs/user_read").then(resp => resp.json()).then(json => {
                const data = json.data;
                $('#user_number').text('');
                $('#user_number').append(`${data.length}`);
                $("#table_body").text('');
                data.forEach((element, index) => {
                    $('#table_body').append(`
                        <tr>
                            <th scope="row">${element.id_user}</th>
                            <td>${element['nom_user']}</td>
                            <td>${element.prenom_user}</td>
                            <td>${element.email_user}</td>
                            <td>${element.is_admin}</td>
                            <td>${element.tel_user}</td>
                            <td>${element.fonction}</td>
                            <td>
                                
                                <button type="button"  onclick="see_user(${element.id_user})" style="border: none; background: none;padding: 0;">
                                    <span aria-hidden="true"><i class="bi bi-pencil text-muted"></i></span>
                                </button>
                                <button type="button" class="ml-2"  onclick="voir_mdp(${element.id_user})" style="border: none; background: none;padding: 0;">
                                    <span aria-hidden="true"><i class="bi bi-key-fill text-muted"></i></span>
                                </button>
                                <button type="button" class="close" onclick="delete_confirmation(${element.id_user})">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </td>
                        </tr>
                        `);
                });
            }).catch(err => {
                console.log(err);
            });
        }
    </script>
</body>

</html>