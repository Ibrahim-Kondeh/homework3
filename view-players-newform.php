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
<button type="button" class="btn btn-add" data-bs-toggle="modal" data-bs-target="#newPlayerModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>


<!-- Modal -->
<div class="modal fade" id="newPlayerModal" tabindex="-1" aria-labelledby="newPlayerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newPlayerModalLabel">New Player</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="players.php">
                    <div class="mb-3">
                        <label for="pName" class="form-label">Player Name</label>
                        <input type="text" class="form-control" id="pName" name="pName">
                    </div>
                    <div class="mb-3">
                        <label for="pDob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="pDob" name="pDob">
                    </div>
                    <div class="mb-3">
                        <label for="pNationality" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="pNationality" name="pNationality">
                    </div>
                    <div class="mb-3">
                        <label for="pPosition" class="form-label">Position</label>
                        <input type="text" class="form-control" id="pPosition" name="pPosition">
                    </div>
                    <!-- Team selection dropdown -->
                    <div class="mb-3">
                        <label for="teamName" class="form-label">Team</label>
                        <select class="form-select" id="teamName" name="teamName">
                           <?php
                                $teams = selectTeamsForInput();
                                foreach ($teams as $team) {
                                    echo "<option value='" . $team['team_id'] . "'>" . $team['team_name'] . "</option>";
                                }
                                ?>
                        </select>
                    </div>
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
