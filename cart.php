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
            <div class="card-top border-bottom text-center"> <a href="#" class="link"> Retour a la boutique</a> <span id="logo">Amoil.com</span> </div>
            <div class="card-body">
                <div class="row upper"> <span class="panier"> panier</span> <span class="payment">Payment</span> </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left border">
                            <div class="row"><span><i  class="bi bi-basket3-fill " style="font-size: 2rem ;" aria-hidden="true"></i></i></span> <span class="header" style="font-size: 2rem;">Panier</span>
                               
                            </div>
                            <form>
                                <div class="card mb-3 p-0 h-25" >
                                    <div class="row no-gutters">
                                      <div class="col-md-2">
                                        <img src="img/products/pc.jpg" class="card-img w-75" alt="...">
                                      </div>
                                      <div class="col-md-10">
                                        <div class="card-body p-3 col-12 " style="width: 100%;">
                                          <span class="card-title p-0 h5 d-flex justify-content-between" style="color: black;"><span style="color: black;">product1</span><input type="number" class=" input " style="border-radius: 7px;height: 30px;width: 100px;" placeholder="qty"><span style="color: black;">$ 1000</span> </span>
                                          <span><div class="d-flex justify-content-end px-3">
                                            <button type="button" style="border-radius: 5px;" class="h-50 w-25 btn-success">view</button>
                                            
                                            
                                        </div></span>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card mb-3 p-0 h-25" >
                                    <div class="row no-gutters">
                                      <div class="col-md-2">
                                        <img src="img/products/product2.jpg" class="card-img w-75" alt="...">
                                      </div>
                                      <div class="col-md-10">
                                        <div class="card-body p-3 col-12 " style="width: 100%;">
                                            <span class="card-title p-0 h5 d-flex justify-content-between" style="color: black;"><span style="color: black;">product1</span><input type="number" class=" input " style="border-radius: 7px;height: 30px;width: 100px;" placeholder="qty"><span style="color: black;">$ 1200</span> </span>
                                            <span><div class="d-flex justify-content-end px-3">
                                              <button type="button" style="border-radius: 5px;" class="h-50 w-25 btn-success">view</button>
                                              
                                              
                                          </div></span>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right border">
                            <div class="header">Adresse de livraison</div>
                            <form>
                                <div class="form-group">
                                  <label for="exampleFormControlInput1">Address</label>
                                  <input type="Adress" class="form-control" id="exampleFormControlInput1" placeholder="12 rue X ">
                                </div>
                                <div class="form-group">
                                  <label for="exampleFormControlSelect1">Ville</label>
                                  <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Meknes</option>
                                    <option>Taza</option>
                                    <option>Fes</option>
                                    <option>MPT</option>
                                    <option>Casablanca</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Code Postale</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="code postale ">
                                  </div>
                                  <div class="row"><input type="checkbox" id="save_card" class="col-2 align-left "> <label class="col-10" for="save_card">Enregistrer l'adresse pour prochaine commandes</label>
                                  </div>
                              </form>
                            
                                
                            </div> <a href="payment.php"><button class="btn" style="border-radius: 5px;">Allez au payment</button></a>
                            
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

    <?php
    require_once "req/footbar.php";

    ?>
  

</body>
</html>