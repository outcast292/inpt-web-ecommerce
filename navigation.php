<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation</title>
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
        <form id="affinitions_form">
          <div class="h4" style="color: navy;">Categories</div>
          <hr>
          <div id="categories">




          </div>
          <hr>
          <div class="h4" style="color: navy;">Affiner par</div>
          <div class="prix">
            <div class="h5" style="color: gold;">Prix</div>
            <br>
            <div>
              entre:
              <input type="text" name="from_price" style="width:40px;margin-right: 3px;margin-left: 2px;border-radius: 5px;border-width: 1px;">
              et
              <input type="text" name="to_price" style="width:40px;margin-left: 3px;border-radius: 5px;border-width: 1px;">
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


            <div class="Marques my-5">
              <div class="h5" style="color: gold;">Marques</div>
              <br>
              <div id="marques">
              </div>
        </form>

      </div>
      <hr>
    </div>
  </div>


  <div class="col">
    <div class="jumbotron">
      <div class="row justify-content-around" id="products_div">

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

  <script>
    const queryString = window.location.search;
    var marques = [];
    var categories = [];
    var products = [];
    var filters = {
      marques: [],
      categories: []
    }
    var pages = [];

    function show_products(val) {
      console.log(val)
      $("#products_div").text('');
      var p = [...products]
      if (filters.categories.length > 0)
        p = p.filter(el => filters.categories.includes(el.id_categorie))
      if (filters.marques.length > 0)
        p = p.filter(el => filters.marques.includes(el.id_marque));
      console.log(p);
      p.forEach((element, index) => {
        $("#products_div").append(`
          <div class="card  card_item col-lg-3 col-md-4 col-sm-5  m-2 p-1">
              <a href="#">
                <img src="img/products/${element.id_produit}.jpg" class="card-img-top w-100 " alt="...">
              </a>
              <div class="card-body">
                <a href="produit?id_product=${element.id_produit}" style="color: black;">
                  <span class="card-title h4">${element.label}</span>
                </a>
                <img src="img/stars.jpg" alt="rating" class=" d-inline-flex align-self-r w-lg-50 w-sm-50 w-md-75">
                <p style="color:gray">${element.description_produit}</p>
                <a href="#" class="btn btn-primary">BUY</a>
                <span class="h6" style="margin-left: 30%;">${element.prix_produit.toFixed(2)} DH</span>
              </div>
            </div>
            `);
      });
    }
    //TODO fix paginations
    //TODO FIX FILTERS
    async function get_products() {
      await fetch("./php/products/read_products" + queryString).then(resp => resp.json()).then(json => {
        products = json.data;
        //FILL brands ARRAY
        marques = products.map(el => {
          return {
            "id_marque": el.id_marque,
            "nom_marque": el.nom_marque
          }
        }).filter((v, i, a) => a.findIndex(t => (t.id_marque === v.id_marque)) === i)
        //FILL CATS ARRAY
        categories = products.map(el => {
          return {
            "id_categorie": el.id_categorie,
            "nom_categorie": el.nom_categorie
          }
        }).filter((v, i, a) => a.findIndex(t => (t.id_categorie === v.id_categorie)) === i);
        //calculate pags

        pages = paginate(products, 12);
      }).catch(err => console.error(err));
      return "ok";
    }
    get_products().then(val => {
      show_products(val);
      marques.forEach((element, index) => {
        $("#marques").append(`
            <input type="checkbox" name="marques" value="${element.id_marque}" style="margin-right:12px">${element.nom_marque}<br>
        `);
      });
      categories.forEach((element, index) => {
        $("#categories").append(`
            <input type="checkbox" name="categories" value="${element.id_categorie}" style="margin-right:12px">${element.nom_categorie}<br>
        `);
      });
    });




    $("#marques").on('change', 'input:checkbox', function() {
      filters.marques = $("input:checkbox:checked").map(function() {
        return parseInt($(this).val())
      }).get();
      console.log(filters.marques);
      show_products("true");
    });
    $("#categories").on('change', 'input:checkbox', function() {
      filters.categories = $("input:checkbox:checked").map(function() {
        return parseInt($(this).val())
      }).get();
      console.log(filters.categories);
      show_products("true");

    });

    function paginate(arr, size) {
      return arr.reduce((acc, val, i) => {
        let idx = Math.floor(i / size)
        let page = acc[idx] || (acc[idx] = [])
        page.push(val)
        return acc
      }, [])
    }
  </script>





</body>

</html>