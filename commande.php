<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AMOIL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/navbar.css" rel="stylesheet">
        <script src="js/jquery-3.5.1.slim.min.js"></script>
    
        <script src="js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap-icons.css">
        <link rel="stylesheet" href="css/index.css">
       
       <?php require_once "req/navbar.php" ?></head>
<body style="margin-top:6%">
<button type="button" class="btn btn-secondary btn-lg btn-block">Revision de la commande</button>

        <h3>Votre Panier</h3>
          <div class="card-deck">
          <div class="card bg-light mb-3" style="max-width: 18rem; ">
  <div class="card-header"><img src="/img/products/pc.jpg"  width="100%">
<img src="img/stars.jpg">
  </div>
  <div class="card-body">
    <h5 class="card-title">PC Portable</h5>
    <p class="card-text"> <h5 style="color:red"> 9999,99 DH</h5> 
                        <div>Quantité <input type="number" class=" input my-3 mx-3" style="border-radius: 15px;height: 30px;width: 130px;">

                          <div class="total"> prix total <h5 style="color:red"> 999999,99DH</div>
                          </div><br>
                          <div class="position-relative top-0 end-3">
                          <button type="button" class="btn btn-warning" style="border-radius: 20px;">Confirmer </button>
                        <button type="button" class="btn btn-danger" style="border-radius: 20px;">Retirer du panier</button>

                          </div>
                </div>
          </div>
          <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"><img src="/img/products/pc.jpg" width="100%" >
<img src="img/stars.jpg">
  </div>
  <div class="card-body">
    <h5 class="card-title">PC Portable</h5>
    <p class="card-text"> <h5 style="color:red"> 9999,99 DH</h5> 
                        <div>Quantité <input type="number" class=" input my-3 mx-3" style="border-radius: 15px;height: 30px;width: 130px;">

                          <div class="total"> prix total <h5 style="color:red"> 999999,99DH</div>
                          </div><br>
                          <div class="position-relative top-0 end-3">
                          <button type="button" class="btn btn-warning" style="border-radius: 20px;">Confirmer </button>
                        <button type="button" class="btn btn-danger" style="border-radius: 20px;">Retirer du panier</button>

                          </div>
                </div>
          </div>
  <div class="card">
  <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"><img src="/img/products/pc.jpg" width="100%"  >
<img src="img/stars.jpg">
  </div>
  <div class="card-body">
    <h5 class="card-title">PC Portable</h5>
    <p class="card-text"> <h5 style="color:red"> 9999,99 DH</h5> 
                        <div>Quantité <input type="number" class=" input my-3 mx-3" style="border-radius: 15px;height: 30px;width: 130px;">

                          <div class="total"> prix total <h5 style="color:red"> 999999,99DH</div>
                          </div><br>
                          <div class="position-relative top-0 end-3">
                          <button type="button" class="btn btn-warning" style="border-radius: 20px;">Confirmer </button>
                        <button type="button" class="btn btn-danger" style="border-radius: 20px;">Retirer du panier</button>

                          </div>
                </div>
          </div>
          </div>

          <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header"> <h3>Payement</h3></div>
  <div class="card-body">
    <div class="card-title">
                <h3>Sous-total:<i style="color:red"> 99999,99DH </i></h3>
                <h3>Livraison: <i style="color:red"> 99999,99DH </i></h3>
                <h3>TOTAL: <i style="color:red"> 99999,99DH </i></h3>
            </div>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
  Choisir la livraison
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adresse de livraison</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="alert alert-warning" role="alert">
  Vous pouvez effectyer cette operation à l'aide d'une adresse predefinie!!
</div>

<div class="col-md-12">
  <label for="validationDefault01" class="form-label">Nom Complet</label>
  <input type="text" class="form-control" id="validationDefault01" required="">
</div> 
<br>


<div class="col-md-12">
  <label for="validationDefault03" class="form-label">Ville</label>
  <input type="text" class="form-control" id="validationDefault03" required="">
</div><br>
<div class="col-md-12">
    <label for="validationDefault05" class="form-label">Adresse</label>
  <input type="text" class="form-control" id="validationDefault05" required="">
</div>
<div class="col-md-12">
    <label for="validationDefault05" class="form-label">Region</label>
  <input type="text" class="form-control" id="validationDefault05" required="">
</div>
<div class="col-md-12">
    <label for="validationDefault05" class="form-label">ZIP Code</label>
  <input type="text" class="form-control" id="validationDefault05" required="">
</div>
<div class="col-md-12">
    <label for="validationDefault01" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="validationDefault01" required="">
  </div> 
  <br>



<div class="col-12">
  <div class="form-check">
  </div>
</div>
</form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">Valider</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><br/><br/>
<button type="button" class="btn btn-primary">Passer la commande</button> 

  </div>

</div>
          </div>
          <h2 class="my-5" style="color: rgb(2, 2, 58);text-decoration: underline;font-style: italic;"> Produits Similairs</h2>
                <div id="carouselControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 col-lg-3">
                                    <div class="card">
                                        <img src="" class="card-img-top" >

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
                                        <img src="" class="card-img-top" alt="...">
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
                                        <img src="" class="card-img-top" alt="...">
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
                                        <img src="" class="card-img-top" alt="...">
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
                                        <img src="" class="card-img-top" alt="...">
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
                                        <img src="" class="card-img-top" alt="...">
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
                                        <img src="" class="card-img-top" alt="...">
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
</body>
<div class="container-fluid">
            <?php
            require_once "req/footbar.php";

            ?>
        </div>
       
    </html>