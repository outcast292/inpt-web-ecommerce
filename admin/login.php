<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login d'admin</title>
    <?php
    session_start();
    $x = 0;
    if (isset($_POST["password"])) {
        require "../php/connection/db.php";
        $email_user = htmlspecialchars($_POST["email"]);
        $pass = $_POST["password"];
        $query = "SELECT  mdp_user,nom_user,id_user FROM utilisateurs where email_user = :email_user ";
        $sql = $conn->prepare($query);
        $sql->execute(array("email_user" => $email_user));
        $row = $sql->fetch();
        if (password_verify($pass, $row["mdp_user"])) {
            $_SESSION["email_user"] = $email_user;
            $_SESSION["nom_user"] = $row["nom_user"];
            $_SESSION["id_user"] = $row["id_user"];
            $_SESSION["connection_status"] = "connected";
            header("location: index.php");
        } else {
            $x = 1;
        }
    }

    ?>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/admin/login.css" rel="stylesheet">
</head>

<body>
    <form class="form-signin" method="post">
        <div class="text-center mb-4">
            <img class="mb-4" src="../../img/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">AMOIL</h1>
            <p>Cette interface est reservée a l'administration de site AMOIl</p>
        </div>

        <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Adresse email</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Mot de passe</label>
        </div>

        <div>
            <?php if ($x != 0) {  ?>
                <div class="alert alert-danger">
                    Données invalides
                </div>

            <?php } ?>

        </div>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2021</p>
    </form>
</body>

</html>