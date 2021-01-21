<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMOIL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.slim.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
    <style>

    </style>
</head>

<body>
    <?php
    require_once "req/navbar3.php";
    ?>
    <div class="container ">
        <div class="jumbotron ">
            <div class="m-5">
                <form action="" method="get">
                    <label for="search_input" class="form-label">Vous recherchez quelque chose ?</label>
                    <input class="form-control" type="search" name="search_input" id="search_input">
                </form>
            </div>

            <div class="row bg-secondary">

                <div class="col-3  border border-warning bg-light  ml-3 ">
                    <div>
                        <h3 class="text-center  p-2 ">categories</h3>
                        <hr>
                        <ul id="categories_aside">


                        </ul>


                    </div>

                </div>
                <div class="col">
                    <div id="caroussel_banners" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <?php
                            $files = array_diff(scandir("./img/banners"), array('..', '.'));
                            foreach ($files as $key => $value) {
                            ?>
                                <li data-target="#caroussel_banners" data-slide-to="<?php echo $key - 2 ?>" <?php if ($key == 2) echo 'class="active"' ?>></li>
                            <?php }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            foreach ($files as $key => $value) {
                            ?>
                                <div class="carousel-item <?php if ($key == 2) echo 'active' ?>">
                                    <img src="./img/banners/<?php echo $value ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php }
                            ?>


                        </div>
                        <a class="carousel-control-prev" href="#caroussel_banners" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#caroussel_banners" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row p-4 my-3">
                <h4>Mieux Notés</h4>
                <hr>
                <div id="caroussel_bestof1" class="carousel slide mt-2 w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=1">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=2">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=3">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=4">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=5">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#caroussel_bestof1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#caroussel_bestof1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row p-4 my-3">
                <h4>Nouvautés</h4>
                <hr>
                <div id="caroussel_newitems" class="carousel slide mt-2 w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=1">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=2">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=3">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=4">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=5">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-body">
                                    <img class="img-fluid" src="http://placehold.it/380?text=6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#caroussel_newitems" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#caroussel_newitems" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

        </div>

    </div>
    <footer>
        <div class="container-fluid">
            <?php
            require_once "req/footbar.php";

            ?>
        </div>
    </footer>


</body>
<script>
    $('#caroussel_bestof').carousel({
        interval: 10000
    })

    $('.carousel .carousel-item').each(function() {
        var minPerSlide = 3;
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < minPerSlide; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });


    fetch("./php/categories/categories_read").then(resp => resp.json()).then(json => {
        const data = json.data;
        data.forEach(element => {
            $("#categories_aside").append(`
                <li><a href="navigation?categorie=${element.id_categorie}" title="${element.prod_count} produits dans cette categorie">${element.nom_categorie}</a></li>
            `)
        });
    });
</script>

</html>