<?php
  session_start();
  ob_start();
    $addressArray= array(); // toutes adresses trouvées
    $indexToSeeAdr = 0; //
    include("./ConnexionBD/bdd.php");
    require_once("./Controllers/SearchAddressController.php");
    require_once("./Model/Model.php");
    
    $addressArray=GetSearchAddres(); //searchController

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
    <link rel="stylesheet" href="./fontawesome6-1/css/all.min.css">

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
    <link href="./css/searchPage.css?rnd" rel="stylesheet">

</head>

<body>

<?php
    if (empty($_SESSION['user']['name'])) {
        header("location: ./index.php");
        exit();
    }
  ?>


<!-- HEADER  -->

  <?php include('./menu.php') ?>
<!-- HEADER DONE  -->


    <main class="container">
 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h3 class="border-bottom pb-2 mb-4">Rechercher adresse</h3>

    <div class="col-md-12 mx-auto">

      <section class="w-100 p-4 d-flex flex-column">

        <div class="container w-100">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <form class="search" method="POST" action="">
                      <i class="fa fa-search"></i> 
                      <input 
                        type="search" 
                        class="form-control" 
                        name="searchInput" 
                        
                        placeholder="Rechercher par id, country, code postal ..."
                      > 
                      <button class="btn btn-primary" name="SeachAddress" type="submit">Rechercher</button> 
                    </form>
                </div>
            </div>
        </div>

          <!------------------ T A B L E ------------------>
        <?php if (isset($addressArray) && count($addressArray) > 0) { ?>

        <div class="container">
          <div class="my-3 py-3 bg-body rounded shadow-sm">
          <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Code postal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($addressArray as $oneAddress) {
                            ?>
                    <tr>
                        <th scope="row"><?=$oneAddress['id']?></th>
                        <td><?=$oneAddress['adresse']?></td>
                        <td><?=$oneAddress['city']?></td>
                        <td><?=$oneAddress['country']?></td>
                        <td><?=$oneAddress['codepostal']?></td>
                        <td>
                          <a class="btn btn-danger" href="#mapView" onclick="changeIndex('<?php echo $oneAddress['city'] ?>')" >
                            <i class="fas fa-map-marker-alt"></i> Voir
                          </a>
                        </td>
                    </tr>
                    <?php
                        }
                     ?>
                </tbody>
            </table>
          </div>
        </div>
        <?php
          } elseif (isset($addressArray) && count($addressArray) <= 0) {
              ?>
          <div class="alert alert-danger mt-4" role="alert">
            Cette adresse n'existe pas dans notre base, veuillez modifier les infos saisies!
          </div>
        <?php
          }
        ?>
          <!------------------ E N D   T A B L E ------------------>


        <!-- --------------- M A P -------------------->

        <?php if (isset($addressArray) && count($addressArray) > 0) : ?>
        <div id="mapView" class="container border border-info ">
          <div class="row w-80 d-flex justify-content-center">
            <?php if (count($addressArray) > 0) : ?>
                <iframe 
                  width="100%" 
                  style="margin-top: 30px;" 
                  height="450" 
                  style="border:0" 
                  loading="lazy" 
                  allowfullscreen 
                  referrerpolicy="no-referrer-when-downgrade" 
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBkThEs8IJlFKMUedk0hiH60obh30N6ETw&q=<?= str_replace(' ', '+', $addressArray[$indexToSeeAdr]["city"]."+".$addressArray[$indexToSeeAdr]["adresse"]."+".$addressArray[$indexToSeeAdr]["country"]) ?>">
                </iframe>
                
            <?php endif; ?>
          </div>
        </div>

        <?php endif; ?>
        <!-- --------------- E N D   M A P -------------->
      </section>

      </div>
    </div>

    <!-- MODAL END  -->

    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/searchAdress.js"></script>
    
    <!-- api key: AIzaSyBkThEs8IJlFKMUedk0hiH60obh30N6ETw -->

    <script async defer src="https://www.google.com/maps/search/?api=AIzaSyBkThEs8IJlFKMUedk0hiH60obh30N6ETw&query=inuka"> </script>
    
</body>

</html>
