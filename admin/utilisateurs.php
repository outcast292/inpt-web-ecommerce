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
                <h4 style="display: inline;">Nombre d'utilisateurs :</h4>

                <?php require "../php/connection/db.php";
                $query = "select count(id_user) from utilisateurs";
                $sql = $conn->prepare($query);
                $sql->execute();
                $nombre = $sql->fetch();
                echo '<h5 style="display: inline;">' . $nombre[0] . '<h5>' ?>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#exampleModal">Ajouter un utilisateur</button>
                </div>

                <br><br><br><br>

                <?php

                $query = "select id_user, nom_user , prenom_user , email_user , is_admin , tel_user,fonction from utilisateurs";
                $sql = $conn->prepare($query);
                $sql->execute();
                $row = $sql->fetchAll();
                $rows = count($row);

                echo '<table class="table">
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
        </thead>';
                for ($i = 0; $i < $rows; $i++) {
                    echo ' 
            <tbody>
                    <tr>
                        <th scope="row">' . $row[$i]['id_user'] . '</th>
                        <td>' . $row[$i]['nom_user'] . '</td>
                        <td>' . $row[$i]['prenom_user'] . '</td>
                        <td>' . $row[$i]['email_user'] . '</td>
                        <td>' . $row[$i]['is_admin'] . '</td>
                        <td>' . $row[$i]['tel_user'] . '</td>
                        <td>' . $row[$i]['fonction'] . '</td>
                        <td><form action="" method="post">
                        <button type="submit" class="close" name="submit' . ($row[$i]['id_user']) . '" action="delete_line(${3})" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </form></td>';
                    echo '</tr>';
                }
                echo '</table>';



                ?>



                <br><br><br>





                <!-- Modal -->
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
                                <form action="" class="form row" method="post">
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
                                    <div class="form-label-group col-12">
                                        <label for="inputEmail">Mot de passe </label>
                                        <input type="text" name="mdp" id="inputMdp" class="form-control" placeholder="mot de passe" required autofocus>

                                    </div><br>
                                   
                                    <div class="form-label-group col-6">
                                        <label for="inputEmail">Telephone</label>
                                        <input type="number" name="tel" id="inputTelephone" class="form-control" placeholder="Telephone" required autofocus>

                                    </div><br>
                                    <div class="form-label-group col-6" >
                                        <label for="inputEmail">Fonction</label>
                                        <input type="text" name="fonction" id="inputFonction" class="form-control" placeholder="Fonction" required autofocus>

                                    </div><br>
                                    <div class="form-label-group col-12">
                                        <label for="inputEmail">Admin:</label>
                                         <input type="radio" name="admin" id="inputadmin" value="0">non |
                                         <input type="radio" name="admin" id="inputadmin" value="1">oui

                                    </div><br>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button class="btn btn-success" type="submit" name="submit">Ajouter</button>
                                    </div>
                                </form>
                                <?php

                                if (isset($_POST["nom"])) {
                                    $iduser = $rows + 1;
                                    $nom = $_POST["nom"];
                                    $prenom = $_POST["prenom"];
                                    $email = $_POST["mail"];
                                    $mdp = $_POST["mdp"];
                                    $admin = $_POST["admin"];
                                    $tel = $_POST["tel"];
                                    $fonction = $_POST["fonction"];
                                    $query = "INSERT into utilisateurs (id_user,nom_user,prenom_user,email_user,mdp_user,is_admin,tel_user,fonction) values( $iduser,'$nom' , '$prenom' , '$email' , '$mdp' ,$admin ,'$tel',  '$fonction' );";
                                    $sql = $conn->prepare($query);
                                    $sql->execute();
                                    echo "done";
                                }
                                for ($j = 1; $j <= $rows + 20; $j++) {
                                    if (isset($_POST['submit' . $j])) {
                                        require "../php/connection/db.php";
                                        $query = "delete from utilisateurs where id_user = $j";
                                        $sql = $conn->prepare($query);
                                        $sql->execute();
                                        echo 'hey';
                                    }
                                }



                                ?>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


</body>

</html>