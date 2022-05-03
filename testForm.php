<?php
  // include_once('./authentication/traitementAuthenticafication.php');
  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>APM docker project</title>

    <!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">

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

      /*       S T A R T   F O R M       */
      .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}

      /*    F I N   S T A R T   F O R M       */

    </style>


  </head>
  <body class="text-center">
    



  <section class="mx-auto py-3 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
        
          <form class="card-body px-5 py-2 text-center" method="POST" action="">

            <div class="mb-md-2 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Inscription</h2>
              <p class="text-white-50 mb-3">Veuillez entrer ces informations pour avoir accès au système!</p>

              <div class="form-floating mb-4 text-black-50">
              <input type="text" class="form-control" name="nameUser" id="floatingName" placeholder="John Doe">
                <label for="floatingName" class="text-black-50">Nom</label>
              </div>

              <div class="form-floating mb-4 text-black-50">           
              <input type="text" class="form-control" name="email" id="floatingEmail" placeholder="hi@gmail.com">
                <label class="form-label" class="text-black-50" for="floatingEMail">Email</label>
              </div>

              <div class="form-floating mb-4 text-black-50">           
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label class="form-label" class="text-black-50" for="floatingPassword">Password</label>
              </div>

              <div class="form-floating mb-4 text-black-50">           
                <input type="password" class="form-control" name="confirmPwd" id="floatingConfirmPassword" placeholder="Password">
                <label class="form-label" class="text-black-50" for="floatingConfirmPassword">Confirm Password</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" name="signUp" type="submit">S'inscrire</button>

            </div>

            <hr class="my-4">
          <div class="mx-auto mt-2 text-white-50">
              <small class="text-muted" >Avez-vous déjà un compte ?
              <a href="./index.php" class="btn text-white fw-bold py-1">Se connecter</a>
              </small>
          </div>
      
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


    
<script src="./js/bootstrap.bundle.min.js"></script>

  </body>
</html>
