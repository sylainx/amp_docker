<?php
  $dashboardErrors = array();
  $successMessage = null;
  
    // $AllAddress= array();
    require_once("./ConnexionBD/bdd.php");
    require_once("./Controllers/AddAddressController.php");
    // require_once("./Model/Model.php");
    require_once("./Model/AddAddress.php");
    require_once("./functions/functions.php");


    if (isset($dashboardErrors) and count($dashboardErrors) > 0) {
        echo "<pre>";
        echo var_dump($dashboardErrors);
        echo "</pre>";
    }
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMP Docker</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <link rel="stylesheet" href="./css/bootstrap.min.css?rnd">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

    <!-- Custom styles for this template -->
    <link href="./css/offcanvas.css?rnd" rel="stylesheet">
    <link href="./css/modals.css?rnd" rel="stylesheet">

</head>

<body>

<?php 
    if ( empty($_SESSION['user']['name'])) {
        header("location: ./index.php");
    }
  ?>


<!-- HEADER  -->

  <?php include('./menu.php') ?>
<!-- HEADER DONE  -->


    <main class="container">
 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h3 class="border-bottom pb-2 mb-4">Ajouter adresse</h3>

        <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST" action="">

             <!-- ------------ A L E R T  E R R O R  -------->
             <div class="mx-auto mb-4">
                <?php
                  if (count($dashboardErrors) > 0) {
                      foreach ($dashboardErrors as $error) {
                          ?>
                      <small class="text-muted alert alert-danger py-2" ><?=$error?></small>
                  <?php
                      }
                      echo '<hr class="my-4">';
                  } elseif (strlen($successMessage) > 0) {
                      ?>
                    <small class="text-muted alert alert-succes py-2" ><?=$successMessage?></small>
                    <?php
                  }
                  ?>
                </div>
                <!-- ------------ F I N   A L E R T  E R R O R  -------->


            <div class="form-floating my-2">
                <input type="text" class="form-control" name="adresse" id="floatingAddress" placeholder="Boulevard 15 octobre" required value=<?= ( isset($_POST['adresse']) ) ? $_POST['adresse'] :  ''; ?>>
                <label for="floatingAddress">Adresse</label>
            </div>

            <div class="form-floating my-2">
                <input type="text" class="form-control" name="city" id="floatingVille" placeholder="Tabarre" required value=<?= ( isset($_POST['city']) ) ? $_POST['city'] :  ''; ?>>
                <label for="floatingVille">Ville</label>
            </div>
            <div class="form-floating my-2">
                <input type="text" class="form-control" name="country" id="floatingCountry" placeholder="Haiti" required value=<?= ( isset($_POST['country']) ) ? $_POST['country'] :  ''; ?>>
                <label for="floatingCountry">Pays</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" name="codePostal" id="floatingCodePostal" placeholder="Tabarre" required value=<?= ( isset($_POST['codePostal']) ) ? $_POST['codePostal'] :  ''; ?>>
                <label for="floatingCodePostal">Code Postal</label>
            </div>

        
          <button class="w-100 btn btn-lg btn-primary" name="addAddress" type="submit"> Ajouter</button>
          
        </form>
      </div>
    </div>

    </main>

    <script src="./js/app.js"></script>
    <script src="./js/offcanvas.js"></script>
</body>

</html>
