
  
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="./index.php" class="nav-link px-2 text-secondary">Accueil</a></li>
          <li><a href="./addAddress.php" class="nav-link px-2 text-white">Ajouter</a></li>
          <li><a href="./searchAddress.php" class="nav-link px-2 text-white">Recherche</a></li>
        </ul>

        <div class="text-end">
          <?php if ( isset($_SESSION['user']) && $_SESSION['user']) { ?>            
            <button type="button" class="btn btn-warning">Logout</button>          
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </header>

