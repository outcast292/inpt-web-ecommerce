<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet"  >
    <link href="css/navbar.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js"  ></script>
    <link rel="stylesheet" href="css/bootstrap-icons.css">
</head>
<body>
<?php
    require_once "req/navbar.php";

    ?>
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4  border-right" >
         <div class="h4" style="color: navy;">Categories</div>
         <hr>
         <ul class="list-unstyled">
           <li ><a href="#" style="color:gray;">categorie1</a>
           </li>
           <li ><a href="#" style="color:gray;">categorie2</a>
           </li>
           <li ><a href="#" style="color:gray;">categorie3</a>
           </li>

         </ul>
         <hr>
         <div class="h4" style="color: navy;">Affiner par</div>
         <div class="prix">
          <div class="h5" style="color: gold;">Prix</div>
          <br>
          <div>
            entre:
            <input  type="text" style="width:40px;margin-right: 3px;margin-left: 2px;border-radius: 5px;border-width: 1px;">
            et
            <input type="text" style="width:40px;margin-left: 3px;border-radius: 5px;border-width: 1px;">
          </div>
          <div>
            
            <input  type="checkbox" style="margin-right: 15px;" >0-50$
            <br>
            
            <input   type="checkbox" style="margin-right: 15px;" >50-200$
            <br>
 
            
            <input  type="checkbox" style="margin-right: 15px;" >200-500$
            <br>
 
            
            <input   type="checkbox" style="margin-right: 15px;" >500-1000$
            <br>
                
            <input   type="checkbox" style="margin-right: 15px;" >1000-2000$
            
          </div>
          <br>
          <div class="couleur">
            <div class="h5" style="color: gold;">Couleurs</div>
              <br>
              <button type="button"  style="background-color: white;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: red;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: yellow;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: blue;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: orange;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: green;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: greenyellow;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: black;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: purple;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: cyan;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: pink;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              <button type="button"  style="background-color: gray;border-width: 1px; width: 25px;height: 25px; border-radius: 4px;" ></button>
              
            </div>
          </div> 
          <br>
          <div class="Marques">
            <div class="h5" style="color: gold;">Marques</div>
            <br>
            <div>
              <div>
              <span>acer</span>
              <input  type="checkbox" style="margin-left: 135px;" >
              <br>
              </div>
              
              <div>
              <span>samsung</span>
              <input   type="checkbox" style="margin-left: 102px;" >
              <br>
              </div>
              
              <div>
              <span>hp</span>
              <input  type="checkbox" style="margin-left: 147px;" >
              <br>
              </div>
  
              <div>
              <span>dell</span>
              <input   type="checkbox" style="margin-left: 140px;" >
              <br>
              </div>
              
              <div>
              <span>asus</span>
              <input   type="checkbox" style="margin-left: 135px;" >
              </div>
            </div>
          </div>
        </div>
        
        
        
        <div class="col" style="margin-left: 15px; margin-right: 20;">
          <div  class="row" style="align-items: center;">
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            <div class="card "  style="width: 15rem; margin: 1rem;">
              <a href="#">
                <img src="img/pc.jpg" class="card-img-top" alt="..." height="160px">
              </a>
              <div class="card-body">
                <a href="#" style="color: black;">
                  <span class="card-title h4">product</span>
                </a>
                <img src="img/stars.png" alt="rating" width="70px" style="margin-left: 30px;">
                <p class="lead">exemple of a discription about the product</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 40%;">12.213$</span>
              </div>
            </div>
            
    
        </div>
<br>
<br><br>
        <div class=" col-12 d-flex justify-content-center" >
          <nav >
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

            
</body>



</html>