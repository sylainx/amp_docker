

<!-- The Modal -->
<div class="modal" id="signupSuccess">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Important</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <?php if( $codeToShow) { ?>
      <div class="modal-body">
            <p> Veuillez sauvegarder ce code. Vous en aurez <b>toujours</b> besoin pour vous connecter: </p>
            <div class="alert alert-dark" role="alert">
                <?= $codeToShow ?>
            </div>
      </div>
      <?php
      }
      ?>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="closeModal" onclick="closeModal" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
