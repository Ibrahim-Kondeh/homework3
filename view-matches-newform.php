<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newMatchModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
    <!-- SVG Icon -->
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
            <label for="competition" class="form-label">Competition</label>
            <select class="form-select" id="competition_id" name="competition_id" required>
              <?php
                // Fetch competitions from the database and populate the dropdown
                $competitions = getAllCompetitions();
                while ($competition = $competitions->fetch_assoc()) {
                    echo '<option value="' . $competition['competition_id'] . '">' . $competition['competition_name'] . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="homeTeam" class="form-label">Home Team</label>
            <select class="form-select" id="team1_id" name="team1_id" required>
              <?php
                // Fetch home teams from the database and populate the dropdown
                $homeTeams = selectTeamsForInput();
                while ($homeTeam = $homeTeams->fetch_assoc()) {
                    echo '<option value="' . $homeTeam['team_id'] . '">' . $homeTeam['team_name'] . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="awayTeam" class="form-label">Away Team</label>
            <select class="form-select" id="team2_id" name="team2_id" required>
              <?php
                // Fetch away teams from the database and populate the dropdown
                $awayTeams = selectTeamsForInput();
                while ($awayTeam = $awayTeams->fetch_assoc()) {
                    echo '<option value="' . $awayTeam['team_id'] . '">' . $awayTeam['team_name'] . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="matchDate" class="form-label">Match Date</label>
            <input type="date" class="form-control" id="match_date" name="match_date" required>
          </div>
          <div class="mb-3">
            <label for="scoreTeam1" class="form-label">Score Team 1</label>
            <input type="number" class="form-control" id="score_team1" name="score_team1" required>
          </div>
          <div class="mb-3">
            <label for="scoreTeam2" class="form-label">Score Team 2</label>
            <input type="number" class="form-control" id="score_team2" name="score_team2" required>
          </div>
          <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Add Match</button>
        </form>
      </div>
    </div>
  </div>
</div>
