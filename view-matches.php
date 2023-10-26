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

    .table-container th,
    .table-container td {
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

    .add-match-button {
        position: absolute;
        top: 20px;
        right: 20px;
    }
</style>

<div class="container">
    <?php
    foreach ($matchesData as $competition => $matches) {
    ?>
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
                                <!-- Edit Match Icon with Dropdown for Competitions -->
                                <button class="btn btn-secondary btn-sm edit-match-icon" data-bs-toggle="modal" data-bs-target="#editMatchModal<?php echo $match['match_id']; ?>">Edit</button>

                                <!-- Delete Match Icon with Dropdown for Competitions -->
                                <button class="btn btn-danger btn-sm delete-match-icon" data-bs-toggle="modal" data-bs-target="#deleteMatchModal<?php echo $match['match_id']; ?>">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>
    <!-- Add Match Button with Dropdown for Competitions -->
    <button class="btn btn-primary add-match-button" data-bs-toggle="modal" data-bs-target="#addMatchModal">Add Match</button>
</div>

<!-- Modals for Add, Edit, and Delete Matches -->
<!-- Add Match Modal -->
<div class="modal fade" id="addMatchModal" tabindex="-1" aria-labelledby="addMatchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Add Match Modal Content Goes Here -->
        </div>
    </div>
</div>

<!-- Edit and Delete Match Modals for Each Match -->
<?php foreach ($matchesData as $competition => $matches) {
    foreach ($matches as $match) { ?>
        <!-- Edit Match Modal for Match ID <?php echo $match['match_id']; ?> -->
        <div class="modal fade" id="editMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="editMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Edit Match Modal Content Goes Here -->
                </div>
            </div>
        </div>

        <!-- Delete Match Modal for Match ID <?php echo $match['match_id']; ?> -->
        <div class="modal fade" id="deleteMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="deleteMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Delete Match Modal Content Goes Here -->
                </div>
            </div>
        </div>
    <?php }
} ?>

<?php include "view-footer.php"; ?>
