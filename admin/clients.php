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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.filtres').hide();
            $("#btn2").click(function() {
                $(".filtres").hide();
            });
            $("#btn1").click(function() {
                $(".filtres").show();
            });
        });
    </script>
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

                    <form class="col-12" id='search_form'>

                        <div class='m-2 row'>
                            <div class='col-1 mt-2'>
                                <h3>Filtres</h3>
                            </div>
                            <div class='col-2 mt-2'><button class="btn btn-light" type="button" id='btn1'>+</button>
                                <button class="btn btn-light" type="button" id="btn2">-</button>
                            </div>


                        </div>
                        <hr width="10%" align='left'>

                        <div class='filtres'>
                            <div class='mt-2 row'>
                                <div class="ml-1 col-5">
                                    <input class="form-control mr-sm-2" type="search" placeholder="identificateur du client" aria-label="Search" name="search">
                                </div>
                            </div>
                            <hr width="45%" align='left'>
                            <div class="mt-2 row ">
                                <div class="form-row p-2 col-12">
                                    <div class="mt-4 pt-3 col-3">
                                        <h6>Periode de commandes: </h6>
                                    </div>
                                    <div class="col-2">
                                        <label for="from_date">Date debut:</label>
                                        <input type="date" name="from_date" class="form-control" value="<?php echo  date("Y-m-d") ?>" id="from_date">
                                    </div>
                                    <div class="ml-3 col-2">
                                        <label for="to_date">Date fin:</label>
                                        <input type="date" name="to_date" class="form-control" value="<?php echo  date("Y-m-d") ?>" id="to_date">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 row">
                                <div class="form-row p-2 col-12">
                                    <div class="mt-4 pt-3 col-3">
                                        <h6>Sexe: </h6>
                                    </div>
                                    <div class="mt-4 pt-3 col-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexe" id="RadioH" value="hommes">
                                            <label class="form-check-label" for="inlineRadio1">Hommes</label>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-3 col-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexe" id="RadioF" value="femmes">
                                            <label class="form-check-label" for="inlineRadio2">Femmes</label>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-3 col-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexe" id="RadioN" value="aucun">
                                            <label class="form-check-label" for="inlineRadio3">Non precis</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 row">
                                <div class="form-row p-2 col-12">
                                    <div class="mt-4 col-3">
                                        <h6>Age: </h6>
                                    </div>
                                    <div class="col-3">
                                        <div class="mcol-3 mt-3">
                                            <div class="input-group">
                                                <input type="number" aria-label="min" name='minimum_age' class="form-control" placeholder="Minimum" min="18">
                                                <input type="number" aria-label="max" name='maximum_age' class="form-control" placeholder="Maximum" min="18">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 row">
                                <div class="form-row p-2 col-12">
                                    <div class="mt-4 col-2">
                                        <h6>Localisation: </h6>
                                    </div>
                                    <div class="col-10 mt-2">
                                        <div class="input-group">
                                            <div class="col-8 mt-2">
                                                <input type="text" aria-label="adresse" name="adresse" class="form-control" placeholder="Adresse" id="input_adresse">
                                            </div>
                                            <div class="col-2 mt-2">
                                                <input type="text" aria-label="ville" name="ville" class="form-control" placeholder="Ville" id="input_ville">
                                            </div>
                                            <div class="col-2 mt-2">
                                                <input type="text" aria-label="ZIP" name="code_postal" class="form-control" placeholder="Code Postal" id="input_zip">
                                            </div>
                                        </div>
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
                                <div class='col-10'></div>
                                <form class="col-2" id="form_search">
                                    <div class="ml-3 pt-2 ">
                                        <input type="submit" id="fitlre_btn" class="btn btn-success btn-block  form-control">

                                    </div>
                            </div>

                    </form>
                </div>



                <div class="mt-4">
                    <div class="alert alert-info" hidden>
                        Nombre de clients trouvées : <span id="nbr_clt"></span>
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
    </div>

</body>

</html>