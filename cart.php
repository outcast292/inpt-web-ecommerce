<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <style>


    </style>
</head>

<body>
    <div>
        <?php
        require_once "req/navbar.php";

        ?>
    </div>
    <div class="container-fluid  ">


        <div class="container-fluid ">
            <div class="jumbotron d-flex justify-content-center ">
                <div class="card">
                    <div class="card-top border-bottom text-center"> <a href="index.php" class="link"> Retour a la boutique</a> <span id="logo">Amoil.com</span> </div>
                    <div class="card-body">
                        <div class="row upper"> <span class="panier"> Panier</span> <span class="payment">Payment</span> </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="left border">
                                    <div class="row"><span><i class="bi bi-basket3-fill " style="font-size: 2rem ;" aria-hidden="true"></i></i></span> <span class="header" style="font-size: 2rem;"> Panier</span></div>

                                    <div id="cart_content">

                                    </div>

                                    <div class="d-flex justify-content-end h3">

                                        <span>Total: DH</span>
                                        <span id="total"></span>
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




    <!--modal-->
    <div class="modal  fade" id="modal_details" tabindex="-1" aria-labelledby="modal_details" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" id="modal_content">

            </div>
        </div>
    </div>


    <div>

        <?php
        require_once "req/footbar.php";

        ?>
    </div>



    <script>
        function fill_cart(id_client) {
            fetch("../php/cart/cart_read?id_client=" + id_client).then(resp => resp.json()).then(json => {
                var data = json.data;
                $("#cart_content").text('');
                data.forEach((element) => {
                    $('#cart_content').append(`
                        <div class="card mb-3 p-0 h-25">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <!--TODO image du produit par son id src="${element.id_produit}.jpg"-->
                                    <img src="img/products/pc.jpg" class="card-img w-75" alt="image_produit">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body p-3 col-12 " style="width: 100%;">
                                        <span class="card-title p-0 h5 d-flex justify-content-between" style="color: black;"><span style="color: black;">${element.label}</span>
                                            <span>
                                                <span class="border pt-2 pl-3 pr-3 pb-1" id="qty">${element.qtt_panier}</span>
                                                <button id="minus" onclick='' style="padding: 2px 5px; border-radius: 10px; background-color: rgb(230,230,230) ;border-color:(230,230,230); border-width: 1px;">-</button>
                                                <button id="plus" onclick='' style="padding: 2px 3px; border-radius: 10px; background-color: rgb(230,230,230) ;border-color:(230,230,230); border-width: 1px;">+</button>
                                            </span>
                                            <span>
                                                <span class="mr-1" id="price" style="color: black;">${element.prix_produit}</span>
                                                <span style="color: black;">DH</span>
                                            </span>
                                        </span>
                                        <span>
                                            <div class="d-flex justify-content-end px-3">
                                                <button style="border-radius: 5px;" class="h-50 w-25 btn-info">VOIR</button>
                                                <button style="border-radius: 5px;" class="h-50 w-25 ml-1 btn-danger" onclick="retirer_du_panier(${id_client},${element.id_produit},'${element.options_produit}')">RETIRER</button>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `);
                });


            }).catch(err => {
                console.log(err);
            });
        }

        function retirer_du_panier(id_client, id_produit, options_produit) {
            $('#modal_content').html(`
            <div class="modal-header">                  
                    <h5 class="modal-title " >RETIRER DU PANIER</h5>          
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Etes-vous sûr de vouloir retirer ce produit du panier?</p>
                </div>
                <div class="modal-footer d-flex justify-content-around">
                     <button type="button" class="btn btn-danger"  onclick="delete_produit(${id_client},${id_produit},'${options_produit}')" >oui</button>
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">non</button>
                </div>    `);
            $('#modal_details').modal('show');
        }

        function delete_produit(id_client, id_produit, options_produit) {
            fetch("../php/cart/delete_from_cart?id_client=" + id_client + "&id_produit=" + id_produit + "&options_produit=" + options_produit).then(resp => resp.json()).then(json => {
                $("#modal_details").modal("hide");
                fill_cart(id_client_session_actuelle);

            }).catch(err => {
                console.log(err);
            });
        }

        //id_client de la session
        fill_cart(id_client_session_actuelle);
    </script>

</body>

</html>