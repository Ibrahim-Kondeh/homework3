<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMatchModal<?php echo $match['match_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="editMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <h1 class="modal-title fs-5" id="editMatchModalLabel<?php echo $match['match_id']; ?>">Edit match</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">


            <label for="competition<?php echo $match['match_id'];?>" class="form-label">Competition</label>
             <select class="form-select" id="competition<?php echo $match['match_id'];?>" name="teamName">
        <?php
        $matches = getAllCompetitions();
        while ($match = $matches->fetch_assoc()) {
            $selected = ($match['match_id'] == $match['match_id']) ? 'selected' : '';
            echo '<option value="' . $match['match_id'] . '" ' . $selected . '>' . $match['competition_name'] . '</option>';
        }
        ?>
      </select>
              </div>
          <div class="mb-3">
    <label for="homeTeam<?php echo $match['match_id'];?>" class="form-label">Home Team</label>
    <select class="form-select" id="homeTeam<?php echo $match['match_id'];?>" name="homeTeam">
        <?php
        $matches = selectTeamsForInput();
        while ($match = $matches->fetch_assoc()) {
            $selected = ($match['match_id'] == $match['match_id']) ? 'selected' : '';
            echo '<option value="' . $match['match_id'] . '" ' . $selected . '>' . $match['team_name'] . '</option>';
        }
        ?>

    </select>
            
       </div>
          <div class="mb-3">
            <label for="homeTeam" class="form-label">Home Team</label>
            <select class="form-select" id="team1_id" name="team1_id" required>
              <!-- Populate this dropdown with team names -->
              <!-- Example: <option value="1">Team A</option> -->
            </select>
          </div>
          <div class="mb-3">
            <label for="awayTeam" class="form-label">Away Team</label>
            <select class="form-select" id="team2_id" name="team2_id" required>
              <!-- Populate this dropdown with team names -->
              <!-- Example: <option value="2">Team B</option> -->
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
          <input type="hidden" name="actionType" value="Edit">
          <button type="submit" class="btn btn-primary">Update Match</button>
        </form>
      </div>
    </div>
  </div>
</div>
