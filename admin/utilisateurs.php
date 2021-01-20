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
                echo '<h5 style="display: inline;">'.$nombre[0].'<h5>' ?>


<br><br><br><br>
<?php 
    require "../php/connection/db.php";
    $query = "select id_user, nom_user , prenom_user , email_user , is_admin , tel_user from utilisateurs";
    $sql = $conn->prepare($query);
    $sql->execute();
    $row = $sql->fetchAll();
    $rows= count($row);
    
        echo'<table class="table">
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
        for($i=0;$i<$rows;$i++){
            echo ' 
            <tbody>
                    <tr>
                        <th scope="row">'.$row[$i]['id_user'].'</th>
                        <td>'. $row[$i]['nom_user'].'</td>
                        <td>'. $row[$i]['prenom_user'].'</td>
                        <td>'. $row[$i]['email_user'].'</td>
                        <td>'. $row[$i]['is_admin'].'</td>
                        <td>'. $row[$i]['tel_user'].'</td>';
            echo '</tr>';

            
    }
        echo '</table>';
        
    

?>
                
                    
                    
                <br><br><br>
                <div class="d-flex justify-content-end">
                <button class="btn btn-danger mr-2 ">supprimer un utilisateur</button>
                <button class="btn btn-success ">Ajouter un utilisateur</button>
                </div>

            </div>
            
        </div>
    </div>


</body>

</html>