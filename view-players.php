    < div class="row">
        <div class = "col">
            <h1>Players</h1>
               </div>
        <div class="col-auto">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
              <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777M3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4"/>
            </svg>
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
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($player = $players->fetch_assoc()) {
                ?>
                    <tr class="highlight-row">
                        <td><?php echo $player['player_name']; ?></td>
                        <td><?php echo $player['date_of_birth']; ?></td>
                        <td><?php echo $player['nationality']; ?></td>
                        <td><?php echo $player['position']; ?></td>
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
