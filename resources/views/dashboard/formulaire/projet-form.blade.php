  
  <!-- The Modal -->
  <div class="modal fade" id="projet">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Création d'un nouveau projet</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body mb-3">
          <form action="">
            <div class="mb-3 mt-3">
              <label for="projet" class="form-label">Nom du projet:</label>
              <input type="text" class="form-control" id="projet" placeholder="Entrer le nom du projet" name="projet">
            </div>
            <div class="mb-3">
              <label for="date_debut" class="form-label">Date de début:</label>
              <input type="date" class="form-control" id="date_debut" name="date_debut">
            </div>
            <div class="mb-3">
              <label for="duree_projet" class="form-label">Durée du projet:</label>
              <input type="text" class="form-control" id="duree_projet" name="duree_projet">
            </div>
            <div class="mb-3">
              <label for="date_fin" class="form-label">Date de fin:</label>
              <input type="date" class="form-control" id="date_fin" name="date_fin">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Niveau d'excécution du projet:</label> <br>
              <input class="d-block"  type="range" value="0" min="0" max="100" oninput="this.nextElementSibling.value = this.value">
              <output>0</output>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description du projet:</label>
              <textarea class="form-control" id="description" name="description" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="fichiers" class="form-label">Ajouter des fichiers:</label>
              <input type="file" class="form-control" id="fichiers" name="fichiers">
            </div>
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
  
        
  
      </div>
    </div>
  </div>
  