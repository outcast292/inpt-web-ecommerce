<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de navigation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/navbar.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap-icons.css">
  <style>


  </style>
</head>

<body>
  <?php

  require_once "req/navbar.php";


  ?>
  <div class="container-fluid mt-5 pt-5">
    <div class="row ">
      <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4 border-right">
        <div class="h4" style="color: navy;">Categories</div>
        <hr>
        <ul class="list-unstyled">
          <li><a href="#" style="color:gray;">categorie1</a>
          </li>
          <li><a href="#" style="color:gray;">categorie2</a>
          </li>
          <li><a href="#" style="color:gray;">categorie3</a>
          </li>

        </ul>
        <hr>
        <div class="h4" style="color: navy;">Affiner par</div>
        <div class="prix">
          <div class="h5" style="color: gold;">Prix</div>
          <br>
          <div>
            entre:
            <input type="text" style="width:40px;margin-right: 3px;margin-left: 2px;border-radius: 5px;border-width: 1px;">
            et
            <input type="text" style="width:40px;margin-left: 3px;border-radius: 5px;border-width: 1px;">
          </div>
          <div>

            <input type="checkbox" style="margin-right: 15px;">0-50$
            <br>

            <input type="checkbox" style="margin-right: 15px;">50-200$
            <br>


            <input type="checkbox" style="margin-right: 15px;">200-500$
            <br>


            <input type="checkbox" style="margin-right: 15px;">500-1000$
            <br>

            <input type="checkbox" style="margin-right: 15px;">1000-2000$

          </div>
          <br>


          <div class="Marques">
            <div class="h5" style="color: gold;">Marques</div>
            <br>
            <div>
              <input type="checkbox" style="margin-right:12px">acer
              <br>
              <input type="checkbox" style="margin-right:12px">samsung
              <br>
              <input type="checkbox" style="margin-right:12px">hp
              <br>
              <input type="checkbox" style="margin-right:12px">dell
              <br>
              <input type="checkbox" style="margin-right:12px">asus
            </div>
          </div>
          <hr>
        </div>
      </div>



      <div class="col">
        <div class="jumbotron">
          <div class="row justify-content-around">
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5  m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class=" d-inline-flex align-self-r w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top  w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
            <div class="card  card_item col-lg-3 col-md-4 col-sm-5 m-2 p-1">
              <a href="#">
                <img src="img/products/pc.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class="  w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">12.213$</span>
              </div>
            </div>
          </div>
          <br>
          <br><br>
          <div class=" col-12 d-flex justify-content-center">
            <nav>
              <ul class="pagination">
                <li class="page-item ">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
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

</body>

</html>