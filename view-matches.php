<?php
$pageTitle = "Matches";
?>

<!-- Include Add Match Modal -->
<?php include "view-matches-addform.php"; ?>

<!-- Add Button at the Top Right Corner -->
<div class="text-end">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMatchModal">
        Add Match
    </button>
</div>

<!-- ... Your existing code for displaying matches ... -->

<div class="container">
    <?php
    foreach ($matchesData as $competition => $matches) {
    ?>
        <div class="table-container">
            <h2><?php echo htmlspecialchars($competition); ?></h2>
            <table>
                <thead>
                    <tr>
                        <th>Home Team</th>
                        <th>Away Team</th>
                        <th>Date</th>
                        <th>Score</th>
                        <th>Actions</th> <!-- New column for Edit/Delete icons -->
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
                                <!-- Edit and Delete icons with dropdown menu -->
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionsDropdown">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php
    }
    ?>

</div>

<?php include "view-footer.php"; ?>
