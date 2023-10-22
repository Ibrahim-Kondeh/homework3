<?php
$pageTitle = "Matches";
include "view-header.php";
?>

<div class="container">
    <h1>Matches</h1>

    <?php
    $currentCompetition = "";
    foreach ($matchesData as $match) {
        if ($match['competition_name'] != $currentCompetition) {
            echo "<h2>" . htmlspecialchars($match['competition_name']) . "</h2>";
            echo "<table class='table'>";
            echo "<thead><tr><th>Date</th><th>Match</th><th>Score</th></tr></thead>";
            echo "<tbody>";
            $currentCompetition = $match['competition_name'];
        }
        echo "<tr>";
        echo "<td>" . htmlspecialchars($match['match_date']) . "</td>";
        echo "<td>" . htmlspecialchars($match['team1_name']) . " vs " . htmlspecialchars($match['team2_name']) . "</td>";
        echo "<td>" . htmlspecialchars($match['score_team1']) . " : " . htmlspecialchars($match['score_team2']) . "</td>";
        echo "</tr>";
    }
    ?>
</div>

<?php include "view-footer.php"; ?>
