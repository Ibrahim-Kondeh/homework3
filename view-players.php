    < div class="row">
        <div class = "col">
            <h1>Players</h1>
               </div>
        <div class="col-auto">
            <?php 
       include "view-players-newform.php";
    ?>

         </div>
    </div>
        
    <div class="table-responsive">
        <table class="player-table table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Nationality</th>
                    <th>Position</th>
                    <th>Team</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($player = $players->fetch_assoc(team_id)) {
                ?>
                    <tr class="highlight-row">
                        <td><?php echo $player['player_name']; ?></td>
                        <td><?php echo $player['date_of_birth']; ?></td>
                        <td><?php echo $player['nationality']; ?></td>
                        <td><?php echo $player['position']; ?></td>
                        <td> <?php echo $player['team_name']; ?></td>
                        <td>
                            <!-- Edit button -->
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPlayerModal<?php echo $player['player_id']; ?>">
                                Edit
                            </button>
                        </td>
                        <td>
                            <!-- Delete button -->
                            <form method="post" action="">
                                <input type="hidden" name="playerId" value="<?php echo $player['player_id']; ?>">
                                <input type="hidden" name="actionType" value="Delete">
                                <button type="submit" class="btn btn-danger btn-sm" name="deletePlayer" onclick="return confirm('Are you sure you want to delete this player?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    
                    <!-- Modal for editing player details -->
                    <div class="modal fade" id="editPlayerModal<?php echo $player['player_id']; ?>" tabindex="-1" aria-labelledby="editPlayerModalLabel<?php echo $player['player_id']; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPlayerModalLabel<?php echo $player['player_id']; ?>">Edit Player</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form for editing player details -->
                                    <form method="post" action="">
                                        <div class="mb-3">
                                            <label for="pName" class="form-label">Player Name</label>
                                            <input type="text" class="form-control" id="pName" name="pName" value="<?php echo $player['player_name']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pDob" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="pDob" name="pDob" value="<?php echo $player['date_of_birth']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pNationality" class="form-label">Nationality</label>
                                            <input type="text" class="form-control" id="pNationality" name="pNationality" value="<?php echo $player['nationality']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="position" class="form-label">Position</label>
                                            <input type="text" class="form-control" id="position" name="position" value="<?php echo $player['position']; ?>" required>
                                        </div>
                                        <input type="hidden" name="playerId" value="<?php echo $player['player_id']; ?>">
                                        <input type="hidden" name="actionType" value="Edit">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ... (your Bootstrap and other necessary scripts) ... -->
</body>

</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
