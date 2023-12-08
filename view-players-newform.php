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
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position">
                    </div>
                    <!-- Team selection dropdown -->
                    <div class="mb-3">
                        <label for="teamName" class="form-label">Team</label>
                        <select class="form-select" id="teamName" name="teamName">
                            <?php
                            $teams = selectTeams();
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
