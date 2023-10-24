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
                <ul class="list-group">
                    <?php foreach ($matches as $match) { ?>
                        <li class="list-group-item">
                            <?php echo htmlspecialchars($match['team1_name']) . " vs " . htmlspecialchars($match['team2_name']); ?><br>
                            Date: <?php echo htmlspecialchars($match['match_date']); ?><br>
                            Score: <?php echo htmlspecialchars($match['score_team1']) . " : " . htmlspecialchars($match['score_team2']); ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<?php include "view-footer.php"; ?>
