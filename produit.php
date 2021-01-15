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
</head>

<body>
    <?php require_once "req/navbar.php"; ?>

    <body>
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <nav class="col navbar navbar-expand-lg navbar-dark">
                    </nav>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="card mb-3">
                <div class="row ">
                    <!--premiere section-->
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <div class="col">

                                <img src="img/pc2.jpeg" alt="" class="card-img" style="max-height: 400px;">

                            </div>
                        </div>
                        <!--d'autres photos (ajouter un carroussel apres)-->
                        <div class="row mx-3 my-2">
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card ">
                                    <a href=""><img src="img/pc2.jpeg" alt="" class="card-img"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>

                        </div>

                    </div>

                    <!--deuxieme section-->
                    <div class="col-12 col-md-6">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-9">
                                    <h3 class="card-title">PC Portable - ACER Aspire 3 </h3>
                                </div>
                                <div class="col-3 ">
                                    <a href=""><i class="bi bi-suit-heart " style="font-size: 22px; color:red;"></i></a>
                                </div>

                            </div>
                            <div>
                                <ul class="list-inline pull-right">
                                    <li>
                                        <i class="bi bi-star-fill" style="color: yellow;"></i>
                                        <i class="bi bi-star-fill" style="color: yellow;"></i>
                                        <i class="bi bi-star-fill" style="color: yellow;"></i>
                                        <i class="bi bi-star-half" style="color: yellow;"></i>
                                        <i class="bi bi-star" style="color: yellow;"></i>

                                    </li>
                                </ul>
                            </div>
                            <h4 style="color: red;">5599,99 MAD</h4>
                            <h5 class="card-text mt-5 mx-3 "><small class="text-muted">Option1</small></h5>
                            <ul class="list-inline pull-right mx-3">
                                <li>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>

                                </li>
                            </ul>
                            <h5 class="card-text mt-3 mx-3 "><small class="text-muted">Option2</small></h5>
                            <ul class="list-inline pull-right mx-3">
                                <li>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>
                                    <a href=""><i class="bi bi-app" style="color: darkblue;"></i></a>

                                </li>
                            </ul>

                            <form action="">
                                <div class="form-group">

                                    <span>
                                        <h5 class="card-text mt-3 mx-3 "><small class="text-muted">Quantité:</small></h5>
                                    </span><input type="number" class=" input my-3 mx-3" style="border-radius: 15px;height: 30px;width: 130px; color:darkblue;">
                                </div>
                                <div class="form-group mt-5  ">
                                    <button type="button" class="btn btn-warning" style="border-radius: 20px;">Ajouter au panier</button>
                                    <button type="button" class="btn btn-danger" style="border-radius: 20px;">Acheter maintenant</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="max-height: 300px;">
                        <nav class="nav nav-tabs">
                            <a class="nav-item nav-link active" href="#p1" data-toggle="tab">Description</a>
                            <a class="nav-item nav-link" href="#p2" data-toggle="tab">Spécifications</a>
                            <a class="nav-item nav-link" href="#p3" data-toggle="tab">Commentaires</a>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane active" id="p1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores molestiae assumenda aliquid, voluptatibus incidunt repellat nesciunt praesentium recusandae aliquam necessitatibus, molestias ullam corporis. Aliquam voluptatem ut fugit cumque et atque!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A, vel unde laborum fugiat tempora eaque magni accusamus obcaecati sunt dolorum facilis eveniet debitis, consequuntur mollitia earum omnis quam voluptatem quae.
                            </div>
                            <div class="tab-pane" id="p2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique modi earum temporibus, optio iste sed, voluptate fugiat ducimus rerum delectus quibusdam non. Suscipit, velit. Quod voluptates molestias enim ut. Asperiores.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, ex architecto? Adipisci explicabo quas pariatur? Recusandae magnam, molestiae voluptate ipsa officiis quasi laboriosam magni distinctio, deserunt iure explicabo, velit iste?
                            </div>
                            <div class="tab-pane" id="p3">

                                <div class="card mx-3 my-2">
                                    <div class="card-body">
                                        <h6 class="card-title ">User x</h6>
                                        This is some text within a card body.
                                    </div>
                                </div>

                                <div class="card mx-3 my-2">
                                    <div class="card-body">
                                        <h6 class="card-title ">User x</h6>
                                        This is some text within a card body.
                                    </div>
                                </div>

                                <div class="container mb-5">

                                    <div id="html">
                                        <button data-toggle="modal" data-target="#formulaire" class="btn btn-primary">Ajouter un commantaire</button>
                                    </div>
                                    <div class="modal fade" id="formulaire">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Votre Commentaire:</h4>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body row">
                                                    <form class="col" action="test.php">
                                                        <div class="form-group">
                                                            <label for="nom" class="form-control-label">Nom d'utilisateur</label>
                                                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Commentaire" class="form-control-label">Commentaire</label>
                                                            <textarea id="note" rows="5" class="form-control" required></textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="container">
                <h2 class="my-5" style="color: rgb(2, 2, 58);text-decoration: underline;font-style: italic;">De la meme catégorie
                </h2>
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card ">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card ">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>

                <h2 class="my-5" style="color: rgb(2, 2, 58);text-decoration: underline;font-style: italic;">Vous pouvez admirer
                    aussi</h2>
                <div id="carouselControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">

                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card ">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="carouselControls" class="carousel-item">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="card ">
                                        <img src="./pc.jpeg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <a class="stretched-link" href="#" style="color: rgb(2, 2, 58);">
                                                <span class="card-title h4">pc</span>
                                            </a>

                                            <p style="color:gray">description</p>
                                            <a href="#" class="btn btn-danger">Acheter</a>
                                            <span class="h6" style="margin-left:20px;">3499,99 MAD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>



        </div>
        <div class="container-fluid">
            <?php
            require_once "req/footbar.php";

            ?>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.0/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $('form').submit(function(e) {
                    e.preventDefault()
                    var $form = $(this)
                    $.post($form.attr('action'), $form.serialize())
                        .done(function(data) {
                            $('#html').html(data)
                            $('#formulaire').modal('hide')
                        })
                        .fail(function() {
                            alert('ça ne marche pas...')
                        })
                })
                $('.modal').on('shown.bs.modal', function() {
                    $('input:first').focus()
                })
            })
        </script>


    </body>

</html>