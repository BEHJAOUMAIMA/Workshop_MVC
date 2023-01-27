<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle blague</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="./Controller.php">
        <input type="hidden" value="" id="hideId" name="Id">
          <div class="mb-3">
            <label for="joke-text" class="col-form-label">Blague:</label>
            <textarea class="form-control px-0" id="joke-text" name="joke-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" id="saveBtn" name="saveBtn" class="btn text-white fs-6 fw-semibold" style="background-color: #301E67;">Enregistrer</button>
        <button type="submit" class="btn " id="updateBtn" name="updateBtn" style="font-weight: 600; background-color: #3C6255;color: white;">Editer</button>
        <button type="submit" class="btn btn-danger px-3" id="deleteBtn" name="deleteBtn" style="font-weight: 600;">Supprimer</button>
        <button type="button" id="closeBtn" class="btn text-white fs-6 fw-semibold" style="background-color: #A61F69;" data-bs-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>