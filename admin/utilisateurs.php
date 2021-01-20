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


                <br><br><br><br>
                <?php

                $query = "select id_user, nom_user , prenom_user , email_user , is_admin , tel_user from utilisateurs";
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
                        <td>' . $row[$i]['tel_user'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';



                ?>



                <br><br><br>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger mr-2 ">supprimer un utilisateur</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Ajouter un utilisateur</button>
                </div>




                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="addUser" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    nom : <br><input class="from-control" type="text" name="nom" style="border-radius: 10px ; border-width :1px ;"><br><br>
                                    prenom : <br><input class="from-control" type="text" name="prenom" style="border-radius: 10px ; border-width :1px ;"><br><br>
                                    email : <br><input class="from-control" type="email" name="mail" style="border-radius: 10px ; border-width :1px ;"><br><br>
                                    mot de pass : <br><input class="from-control" type="text" name="mdp" style="border-radius: 10px ; border-width :1px ;"><br><br>
                                    admin(0,1) : <br><input class="from-control" type="number" name="admin" style="border-radius: 10px ; border-width :1px ;"><br><br>
                                    telephone : <br><input class="from-control" type="number" name="tel" style="border-radius: 10px ; border-width :1px ;"><br><br>
                                    fonction : <br><input class="from-control" type="text" name="fonction" style="border-radius: 10px ; border-width :1px ;"><br><br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        <button class="btn btn-success" type="submit" name="submit">Ajouter</button>
                                    </div>
                                </form>
                                <?php

                                if (isset($_POST["nom"])) {
                                    $nom = $_POST["nom"];
                                    $prenom = $_POST["prenom"];
                                    $email = $_POST["mail"];
                                    $mdp = $_POST["mdp"];
                                    $admin = $_POST["admin"];
                                    $tel = $_POST["tel"];
                                    $fonction = $_POST["fonction"];
                                    $query = "INSERT into utilisateurs (nom_user,prenom_user,email_user,mdp_user,is_admin,tel_user,fonction) values( '$nom' , '$prenom' , '$email' , '$mdp' ,$admin ,'$tel',  '$fonction' );";
                                    $sql = $conn->prepare($query);
                                    $sql->execute();
                                    echo "done";
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