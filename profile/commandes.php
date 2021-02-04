<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar.css" rel="stylesheet">
    <script src="../js/jquery-3.5.1.slim.min.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/index.css">
    <style>


    </style>
</head>

<body>
    <div>
        <?php
        require_once "../req/navbar.php";

        ?>
    </div>

    <div class="container">
        <div class="jumbotron ">
            <div class="row mt-4">
                <div class="col-md-3 ">
                    <div class="list-group ">
                        <a href="infos.php" class="list-group-item list-group-item-action ">Profile</a>
                        <a href="commandes.php" class="list-group-item list-group-item-action active">Commandes</a>
                        <a href="wishlist.php" class="list-group-item list-group-item-action">Wishlist</a>
                        <a href="statistiques.php" class="list-group-item list-group-item-action">Statistiques</a>
                        <a href="adresse.php" class="list-group-item list-group-item-action ">Adresse</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Vos Commandes</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-info" id="div_nbr">
                                        Nombre des commandes : <span id="nbr_cmnd"></span>
                                    </div>

                                    <table class="table table-hover" id="table_search">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Etat</th>
                                                <th scope="col">Montant</th>
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
            </div>
        </div>
    </div>


    <div>

        <?php
        require_once "../req/footbar.php";

        ?>
    </div>

</body>

<script>
    $(document).ready(get_data(event));

    function get_data(event) {
        fetch("../php/profile/client_commande").then(resp => resp.json()).then(json => {
            var data = json.data;
            $("#table_body").text('');
            data.forEach((element, index) => {
                $('#table_body').append(`
                <tr class=" ${element.valide==1? "table-success":element.valide==-1?"table-danger":"" }">
                    <td>${element.date_commande}</td>
                    <td>${element.etat_actuell}</td>
                    <td>${element.prix_commande}</td>
                    
                </tr>
                `);
            });
            $("#nbr_cmnd").text(data.length);
            

        }).catch(err => {
            console.log(err);
        });
    }
</script>

</html>