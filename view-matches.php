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
    <?php foreach ($matchesData as $competition => $matches) { ?>
        <div class="table-container">
            <h2><?php echo $competition; ?></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Home Team</th>
                        <th scope="col">Away Team</th>
                        <th scope="col">Match Date</th>
                        <th scope="col">Score</th>
                        <th scope="col">Actions</th>
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
                            <!-- Edit Button -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editMatchModal<?php echo $match['match_id']; ?>">
                                Edit
                            </button>

                            <!-- Edit Match Modal -->
                            <div class="modal fade" id="editMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="editMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
                                <!-- Modal content goes here -->
                            </div>

                            <!-- Delete Button -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteMatchModal<?php echo $match['match_id']; ?>">
                                Delete
                            </button>

                            <!-- Delete Match Confirmation Modal -->
                            <div class="modal fade" id="deleteMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="deleteMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
                                <!-- Modal content goes here -->
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>

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

<?php include "view-footer.php"; ?>
