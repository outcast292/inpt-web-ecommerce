<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
  <link href="css/payment.css" rel="stylesheet">
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
            <div class="card-top border-bottom text-center"> <a href="#" class="link"> Retour a la boutique</a> <span id="logo">Amoil.com</span> </div>
            <div class="card-body">

                <div class="row upper"> <span><i class="fa fa-check-circle-o"></i> panier</span> <span class="payment">Payment</span> </div>


                <div class="row">
                    <div class="col-md-7">
                        <div class="left border">
                            <div class="row"> <span class="header">Payment</span>
                                <div class="icons"> <img src="https://img.icons8.com/color/48/000000/visa.png" /> <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /> <img src="https://img.icons8.com/color/48/000000/maestro.png" /> </div>
                            </div>
                            <form> <span>nom du proprietaire:</span> <input class="mb-4" placeholder="Linda Williams"> <span >Numero de la carte:</span> <input class="mb-4" placeholder="0125 6780 4567 9909">
                                <div class="row">
                                    <div class=" col-4 mb-4"><span>date d'expiration:</span> <input placeholder="YY/MM"> </div>
                                    <div class="col-4 mb-2"><span>CVV:</span> <input id="cvv"> </div>
                                </div> <input type="checkbox" id="save_card" class="align-left"> <label for="save_card">Enregistrer les details de la carte banquaire</label>
                            </form>
                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <div class="right border">
                            <div class="header">revision de la commande</div>
                            <p>2 produits</p>
                            <div class="row item">
                                <div class="col-4 align-self-center"><img class="img-fluid" src="img/products/pc.jpg"></div>
                                <div class="col-8">
                                    <div class="row"><b>$ 1000</b></div>
                                    <div class="row text-muted">Product 1</div>
                                    <div class="row">Qty:2</div>
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-4 align-self-center"><img class="img-fluid" src="img/products/product2.jpg"></div>
                                <div class="col-8">
                                    <div class="row"><b>$ 1200</b></div>
                                    <div class="row text-muted">product 2</div>
                                    <div class="row">Qty:1</div>
                                </div>
                            </div>
                            <hr>
                            <div class="row lower">
                                <div class="col text-left">Subtotal</div>
                                <div class="col text-right">$ 2200</div>
                            </div>
                            <div class="row lower">
                                <div class="col text-left">livraison</div>
                                <div class="col text-right">Free</div>
                            </div>
                            <div class="row lower">
                                <div class="col text-left"><b>Total a payer</b></div>
                                <div class="col text-right"><b>$ 2200</b></div>
                            </div>
                            <div class="row lower">
                                <div class="col text-left "><a href="#" class="link"><u>ajouter un promo-code</u></a></div>

                            </div> 
                            
                        </div>
                        <button class="btn" style="border-radius:5px ;">Terminer la commande</button>
                        <a href="cart.php"><button class="btn btn-secondary mt-2 " style="border-radius: 5px;background-color: lightgray;color:black ;">retourner au panier</button></a>
                    </div>
                </div>
            </div>
          </div>
        </div>

      </div>
    </div>




  </div>






</div>

    <?php
    require_once "req/footbar.php";

    ?>
  

</body>
</html>