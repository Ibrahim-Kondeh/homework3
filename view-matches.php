<?php
$pageTitle = "Matches";
include "view-header.php";
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
</style>

<div class="container">
    <?php
    foreach ($matchesData as $competition => $matches) {
    ?>
        <div class="table-container">
            <h2><?php echo htmlspecialchars($competition); ?></h2>
            <!-- Add Match Button -->
            <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#addMatchModal<?php echo htmlspecialchars($competition); ?>">
                Add Match
            </button>

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
                                <!-- Edit Match Icon -->
                                <button class="btn btn-secondary btn-sm edit-match-icon" data-bs-toggle="modal" data-bs-target="#editMatchModal<?php echo $match['match_id']; ?>">Edit</button>
                                <!-- Delete Match Icon -->
                                <button class="btn btn-danger btn-sm delete-match-icon" data-bs-toggle="modal" data-bs-target="#deleteMatchModal<?php echo $match['match_id']; ?>">Delete</button>
                            </td>
                        </tr>

                        <!-- Edit Match Modal for Each Match -->
                        <div class="modal fade" id="editMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="editMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Edit Match Modal Content Goes Here -->
                                </div>
                            </div>
                        </div>

                        <!-- Delete Match Modal for Each Match -->
                        <div class="modal fade" id="deleteMatchModal<?php echo $match['match_id']; ?>" tabindex="-1" aria-labelledby="deleteMatchModalLabel<?php echo $match['match_id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Delete Match Modal Content Goes Here -->
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Add Match Modal for Each Competition -->
        <div class="modal fade" id="addMatchModal<?php echo htmlspecialchars($competition); ?>" tabindex="-1" aria-labelledby="addMatchModalLabel<?php echo htmlspecialchars($competition); ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Add Match Modal Content Goes Here -->
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php include "view-footer.php"; ?>

<!-- JavaScript for Add, Edit, and Delete Modals -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    // JavaScript code for handling add, edit, and delete modals
    // ...
</script>
