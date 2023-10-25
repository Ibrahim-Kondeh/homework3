
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newTeamModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newTeamModal" tabindex="-1" aria-labelledby="newTeamModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newTeamModalLabel">New Team</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        
<form method="post" action ="">
    <div class="mb-3">
        <label for="tName" class="form-label">Team Name</label>
        <input type="text" class="form-control" id="tName" name="tName" required>
    </div>
    <div class="mb-3">
        <label for="tcName" class="form-label">Coach Name</label>
        <input type="text" class="form-control" id="tcName" name="tcName" required>
    </div>
    <div class="mb-3">
        <label for="tFyear" class="form-label">Founded Year</label>
        <input type="number" class="form-control" id="tFyear" name="tFyear" required>
    </div>
    <div class="mb-3">
        <label for="tStadium" class="form-label">Home Stadium</label>
        <input type="text" class="form-control" id="tStadium" name="tStadium" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Team</button>
</form>

    
      </div>
    </div>
  </div>
</div>
