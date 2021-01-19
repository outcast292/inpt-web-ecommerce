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

                    <h1>
                        <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>Clients
                    </h1>
                    <h6 class="hidden-sm-down">Page pour visualiser les details des clients</h6>
                    <hr>

                    <div class='mt-2 row'>
                        <div class="ml-1 col-5">
                            <input class="form-control mr-sm-2" type="search" placeholder="email ou id du client" aria-label="Search">
                        </div>
                        <div class="ml-1 col-1">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </div>
                    </div>
                    <hr width="55%" align='left'>
                    <div class='m-2 row'>
                        <h3>Filtres</h3>
                    </div>
                    <hr width="10%" align='left'>

                    <div class="mt-2 row">

                        <form class="col-12" id="form_search">
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

                        </form>
                    </div>
                    <div class="mt-2 row">

                        <form class="col-12" id="form_search">
                            <div class="form-row p-2 col-12">
                                <div class="mt-4 pt-3 col-3">
                                    <h6>Sexe: </h6>
                                </div>
                                <div class="mt-4 pt-3 col-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Hommes</label>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 col-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Femmes</label>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 col-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                        <label class="form-check-label" for="inlineRadio3">Non precis</label>
                                    </div>
                                </div>




                            </div>

                        </form>
                    </div>
                    <div class="mt-2 row">

                        <form class="col-12" id="form_search">
                            <div class="form-row p-2 col-12">
                                <div class="mt-4 col-3">
                                    <h6>Localisation: </h6>
                                </div>
                                <div class="mcol-3 mt-2">
                                    <div class="input-group">
                                        <input type="text" aria-label="ville" class="form-control" placeholder="Quartier">
                                        <input type="text" aria-label="ZIP" class="form-control" placeholder="Code Postal">
                                        <input type="text" aria-label="ville" class="form-control" placeholder="Ville">
                                        <input type="text" aria-label="Region" class="form-control" placeholder="Region">
                                    </div>
                                </div>






                            </div>

                        </form>
                    </div>
                    <div class="mt-2 row">

                        <form class="col-12" id="form_search">
                            <div class="form-row p-2 col-12">
                                <div class="mt-4 col-3">
                                    <h6>Nombres de commandes: </h6>
                                </div>
                                <div class="col-3">
                                    <div class="mcol-3 mt-3">
                                        <div class="input-group">
                                            <input type="number" aria-label="min" class="form-control" placeholder="Minimum">
                                            <input type="number" aria-label="max" class="form-control" placeholder="Maximum">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                    <div class="mt-2 row">
                        <div class='col-10'></div>
                        <form class="col-2" id="form_search">
                            <div class="ml-3 pt-2 ">
                                <input type="submit" id="submit_search" class="btn btn-success btn-block  form-control">

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
                                    <!-- details ou email ou appeler -->
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