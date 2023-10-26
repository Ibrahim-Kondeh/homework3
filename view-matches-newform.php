<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMatchModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.a.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
  </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newMatchModal" tabindex="-1" aria-labelledby="newMatchModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newMatchModalLabel">New Match</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="post" action="">
            <div class="mb-3">
                <label for="competition" class="form-label">Select Competition</label>
                <!-- Dropdown for selecting competition -->
                <select class="form-select" id="competition" name="competition" required>
                    <!-- Populate this dropdown with competition names from your database -->
                    <!-- Example option: <option value="competition_id">Competition Name</option> -->
                </select>
            </div>
            <div class="mb-3">
                <label for="team1" class="form-label">Team 1</label>
                <!-- Dropdown for selecting team 1 -->
                <select class="form-select" id="team1" name="team1" required>
                    <!-- Options will be populated based on the selected competition using JavaScript -->
                </select>
            </div>
            <div class="mb-3">
                <label for="team2" class="form-label">Team 2</label>
                <!-- Dropdown for selecting team 2 -->
                <select class="form-select" id="team2" name="team2" required>
                    <!-- Options will be populated based on the selected competition using JavaScript -->
                </select>
            </div>
            <div class="mb-3">
                <label for="matchDate" class="form-label">Match Date</label>
                <input type="date" class="form-control" id="matchDate" name="matchDate" required>
            </div>
            <div class="mb-3">
                <label for="scoreTeam1" class="form-label">Score Team 1</label>
                <input type="number" class="form-control" id="scoreTeam1" name="scoreTeam1" required>
            </div>
            <div class="mb-3">
                <label for="scoreTeam2" class="form-label">Score Team 2</label>
                <input type="number" class="form-control" id="scoreTeam2" name="scoreTeam2" required>
            </div>
            <input type="hidden" name="actionType" value="Add">
            <button type="submit" class="btn btn-primary">Add Match</button>
        </form>

      </div>
    </div>
  </div>
</div>

<script>
// JavaScript to populate teams dropdown based on selected competition
document.getElementById('competition').addEventListener('change', function() {
    var selectedCompetitionId = this.value;
    // Make an AJAX request to fetch teams based on selected competition ID
    // Populate team dropdowns dynamically with the fetched data using JavaScript
});
</script>
