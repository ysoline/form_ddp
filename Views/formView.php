
<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="modalform" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalform">Ajouter une question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method='post' action='index.php?action=addform'>
            <label for='content'>Entrer la question</label>
            <input type='text' id='content'name='content'>
            <button type='submit' class="btn btn-primary add_form">Confirmer</button>
        </form>

        </div>
    </div>
  </div>
</div>