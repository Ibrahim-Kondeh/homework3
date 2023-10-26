<div class="modal fade" id="addMatchModal" tabindex="-1" aria-labelledby="addMatchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addMatchModalLabel">Add Match</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="competition" class="form-label">Competition Name</label>
                        <!-- Dropdown list for competition name -->
                        <select class="form-select" id="competition" name="competition" required>
                            <!-- Populate options dynamically from competitions data -->
                            <?php foreach ($competitionsData as $competition) { ?>
                                <option value="<?php echo $competition['competition_id']; ?>"><?php echo htmlspecialchars($competition['competition_name']); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="team2" class="form-label">Away Team</label>
                        <!-- Dropdown list for away team -->
                        <select class="form-select" id="team2" name="team2" required>
                            <!-- Populate options dynamically from teams data -->
                            <?php foreach ($teamsData as $team) { ?>
                                <option value="<?php echo $team['team_id']; ?>"><?php echo htmlspecialchars($team['team_name']); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="matchDate" class="form-label">Match Date</label>
                        <input type="date" class="form-control" id="matchDate" name="matchDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="scoreTeam1" class="form-label">Home Team Score</label>
                        <input type="number" class="form-control" id="scoreTeam1" name="scoreTeam1" required>
                    </div>
                    <div class="mb-3">
                        <label for="scoreTeam2" class="form-label">Away Team Score</label>
                        <input type="number" class="form-control" id="scoreTeam2" name="scoreTeam2" required>
                    </div>
                    <input type="hidden" name="actionType" value="Add">
                    <button type="submit" class="btn btn-primary">Add Match</button>
                </form>
            </div>
        </div>
    </div>
</div>
