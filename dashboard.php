<?php
    $AllAddress= array();
    include("./ConnexionBD/bdd.php");
    require_once("./Controllers/DashboardController.php");
    require_once("./Model/Model.php");

    $AllAddress= GetAllAddress();
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
    <link rel="stylesheet" href="./fontawesome6-1/css/all.css">

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

</head>

<body>



<!-- HEADER  -->

  <?php include('./menu.php') ?>
<!-- HEADER DONE  -->


    <main class="container">
 
    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h3 class="border-bottom pb-2 mb-4">Liste des addresses</h3>

            <div class="d-flex justify-content-end mb-4">
                <a href="./addAddress.php" class="btn btn-primary mx-3">Ajouter</a>
                <a href="./searchAddress.php" class="btn btn-primary">Rechercher</a>
            </div>

            
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
                        if (count($AllAddress) > 0) {
                            foreach ($AllAddress as $oneAddress) {
                                ?>
                    <tr>
                        <th scope="row"><?=$oneAddress['id']?></th>
                        <td><?=$oneAddress['adresse']?></td>
                        <td><?=$oneAddress['city']?></td>
                        <td><?=$oneAddress['country']?></td>
                        <td><?=$oneAddress['codepostal']?></td>
                        <td >
                            <a class="btn btn-danger" href="#mapView" onclick="" >
                              <i class="fas fa-map-marker-alt"></i> see on Map
                            </a>
                        </td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
    </div>

    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/offcanvas.js"></script>
</body>

</html>
