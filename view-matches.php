<?php
$pageTitle = "Matches";
include "view-header.php";
?>

<div class="container">
    <h1>Matches</h1>

    <?php
    foreach ($matchesData as $competition => $matches) {
    ?>
        <div class="card my-4">
            <div class="card-header">
                <?php echo htmlspecialchars($competition); ?>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Team 1</th>
                            <th>Team 2</th>
                            <th>Date</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($matches as $match) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($match['team1_name']); ?></td>
                                <td><?php echo htmlspecialchars($match['team2_name']); ?></td>
                                <td><?php echo htmlspecialchars($match['match_date']); ?></td>
                                <td><?php echo htmlspecialchars($match['score_team1']) . " : " . htmlspecialchars($match['score_team2']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php include "view-footer.php"; ?>
