
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMatchModal<?php echo $matchId; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>
<!-- Modal -->
<div class="modal fade" id="editMatchModal<?php echo $matchId; ?>" tabindex="-1" aria-labelledby="editMatchModalLabel<?php echo $matchId; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editMatchModalLabel<?php echo $matchId; ?>">Edit Match</h1>
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
                    $selected = ($competition['competition_id'] == $match['competition_id']) ? 'selected' : '';
                    echo '<option value="' . $competition['competition_id'] . '" ' . $selected . '>' . $competition['competition_name'] . '</option>';
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
                    $selected = ($homeTeam['team_id'] == $match['team1_id']) ? 'selected' : '';
                    echo '<option value="' . $homeTeam['team_id'] . '" ' . $selected . '>' . $homeTeam['team_name'] . '</option>';
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
                    $selected = ($awayTeam['team_id'] == $match['team2_id']) ? 'selected' : '';
                    echo '<option value="' . $awayTeam['team_id'] . '" ' . $selected . '>' . $awayTeam['team_name'] . '</option>';
                }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="matchDate" class="form-label">Match Date</label>
            <input type="date" class="form-control" id="match_date" name="match_date" value="<?php echo $match['match_date']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="scoreTeam1" class="form-label">Score Team 1</label>
            <input type="number" class="form-control" id="score_team1" name="score_team1" value="<?php echo $match['score_team1']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="scoreTeam2" class="form-label">Score Team 2</label>
            <input type="number" class="form-control" id="score_team2" name="score_team2" value="<?php echo $match['score_team2']; ?>" required>
          </div>
          <input type="hidden" name="actionType" value="Edit">
          <input type="hidden" name="matchId" value="<?php echo $matchId; ?>">
          <button type="submit" class="btn btn-primary">Update Match</button>
        </form>
      </div>
    </div>
  </div>
</div>
