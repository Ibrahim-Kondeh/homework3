<?php
$pageTitle = "Matches by Competition";
include "view-header.php";
?>

<div class="container">
    <h1>Matches by Competition</h1>

    <?php
    foreach ($matchesData as $competition => $matches) {
        echo "<h2>" . htmlspecialchars($competition) . "</h2>";
        echo "<table class='table'>";
        echo "<thead><tr><th>Teams</th><th>Date</th><th>Score</th></tr></thead>";
        echo "<tbody>";

        foreach ($matches as $match) {
            $score = htmlspecialchars($match['score_team1']) . " : " . htmlspecialchars($match['score_team2']);
            echo "<tr>";
            echo "<td>" . htmlspecialchars($match['team1_name']) . " vs " . htmlspecialchars($match['team2_name']) . "</td>";
            echo "<td>" . htmlspecialchars($match['match_date']) . "</td>";
            echo "<td>" . $score . "</td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
    }
    ?>
</div>

<?php include "view-footer.php"; ?>
