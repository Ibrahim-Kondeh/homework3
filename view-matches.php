<?php
$pageTitle = "Matches";

?>

<style>
    body {
        background-color: #333; /* Set the background color */
        color: white;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .table-container {
        background-color: rgba(0, 0, 0, 0.7);
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
    }

    .table-container table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    .table-container th, .table-container td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .table-container th {
        background-color: #444;
    }

    .table-container tr:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>



<div class="container">
    <!-- Add Match Button at the top -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addMatchModal">
        <i class="bi bi-plus"></i> Add Match
    </button>
    <?php foreach ($matchesData as $competition => $matches) { ?>
        <div class="table-container">
            <h2><?php echo htmlspecialchars($competition); ?></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Home Team</th>
                        <th>Away Team</th>
                        <th>Date</th>
                        <th>Score</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($matches as $match) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($match['team1_name']); ?></td>
                            <td><?php echo htmlspecialchars($match['team2_name']); ?></td>
                            <td><?php echo htmlspecialchars($match['match_date']); ?></td>
                            <td><?php echo htmlspecialchars($match['score_team1']) . " : " . htmlspecialchars($match['score_team2']); ?></td>
                            <td>
                                <!-- Edit and Delete buttons -->
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editMatchModal<?php echo $match['match_id']; ?>">Edit</button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteMatchModal<?php echo $match['match_id']; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } ?>
    

  
   
    <!-- Confirmation Messages -->
    <?php if (isset($_SESSION['success_message'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['success_message']; ?>
        </div>
    <?php } ?>
    <?php if (isset($_SESSION['error_message'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error_message']; ?>
        </div>
    <?php } ?>
</div>


<!-- JavaScript for confirmation modals -->
<script>
    // Your JavaScript code remains unchanged
</script>


<!-- Add Match Modal -->
<div class="modal fade" id="addMatchModal" tabindex="-1" aria-labelledby="addMatchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMatchModalLabel">Add Match</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="add_match.php" method="POST">
                    <div class="mb-3">
                        <label for="homeTeam" class="form-label">Home Team</label>
                        <select class="form-select" id="homeTeam" name="homeTeam">
                            <?php
                           foreach ($team as $teams) {
                                echo "<option value='{$team['id']}'>{$team['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="awayTeam" class="form-label">Away Team</label>
                        <select class="form-select" id="awayTeam" name="awayTeam">
                            <?php
                            foreach ($team as $teams) {
                                echo "<option value='{$team['id']}'>{$team['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <!-- Add more fields like match date, scores, etc., as needed -->
                    <button type="submit" class="btn btn-primary">Add Match</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modals for editing and deleting matches -->
<?php foreach ($matchesData as $competition => $matches) {
    foreach ($matches as $match) { ?>
        <!-- Edit Match Modal for Match ID <?php echo $match['match_id']; ?> -->
        <div class="modal fade" id="editMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="editMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Edit Match Modal Content Goes Here -->
                    <!-- Form for editing match details -->
                </div>
            </div>
        </div>

        <!-- Delete Match Modal for Match ID <?php echo $match['match_id']; ?> -->
        <div class="modal fade" id="deleteMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="deleteMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Delete Match Modal Content Goes Here -->
                    <!-- Form for confirmation of match deletion -->
                </div>
            </div>
        </div>
    <?php }
} ?>

<?php include "view-footer.php"; ?>
