<nav class="navbar navbar-expand-lg  fixed-top navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/logo.svg" alt="" width="40" height="30" class="d-inline-block align-top">
      AMOIL
    </a>
    <?php if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php") {
    }
    ?>
    <div class="d-flex row">
      <div class="col-2 mx-4">
        <a href="#">
          <i class="bi bi-cart4" style="font-size: 2rem;"></i>
          Panier
        </a>
      </div>
      <div class="col-2 mx-4">
        <a href="#">
          <i class="bi bi-heart-fill" style="font-size: 2rem;"></i>
          Favoris
        </a>
      </div>
      <div class="col-2 mx-2">
        <a href="#" >
          <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
          <?php
          if (isset($_SESSION["user_name"])) {

            echo $_SESSION["user_name"];
          } else {
            echo "compte";
          }  ?>
        </a>
      </div>
    </div>
  </div>
</nav>

