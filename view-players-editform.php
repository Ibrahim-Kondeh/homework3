<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editPlayerModal<?php echo $player['player_id'];?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <!-- ... SVG paths ... -->
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editPlayerModal<?php echo $player['player_id'];?>" tabindex="-1" aria-labelledby="editPlayerModalLabel<?php echo $player['player_id'];?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editPlayerModalLabel<?php echo $player['player_id'];?>">Edit Player</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="pName<?php echo $player['player_id'];?>" class="form-label">Player Name</label>
                        <input type="text" class="form-control" id="pName<?php echo $player['player_id'];?>" name="pName" value ="<?php echo $player['player_name'];?>"> 
                    </div>
                    <div class="mb-3">
                        <label for="pDob<?php echo $player['player_id'];?>" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="pDob<?php echo $player['player_id'];?>" name="pDob" value = "<?php echo $player['date_of_birth'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="pNationality<?php echo $player['player_id'];?>" class="form-label">Nationality</label>
                        <input type="text" class="form-control" id="pNationality<?php echo $player['player_id'];?>" name="pNationality" value="<?php echo $player['nationality'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="pPosition<?php echo $player['player_id'];?>" class="form-label">Position</label>
                        <input type="text" class="form-control" id="pPosition<?php echo $player['player_id'];?>" name="pPosition" value="<?php echo $player['position'];?>">
                        <?php
$teams= selectTeamsForInput();
$selectedTeam = $player['team_id'];
include "teams.php";
?>
                    </div>
                    <input type="hidden" name="playerId" value="<?php echo $player['player_id'];?>">
                    <input type="hidden" name="actionType" value="Edit">
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
