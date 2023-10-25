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
        flex-wrap: wrap;<?php


function getAllMatchesGroupedByCompetition() {
    try {
        $conn = get_db_connection();
        $query = "SELECT c.competition_name, m.match_id, t1.team_name AS team1_name, t2.team_name AS team2_name, m.match_date, m.score_team1, m.score_team2 
                  FROM matches m 
                  JOIN competition c ON m.competition_id = c.competition_id
                  JOIN teams t1 ON m.team1_id = t1.team_id 
                  JOIN teams t2 ON m.team2_id = t2.team_id 
                  ORDER BY c.competition_name, m.match_date";
        $result = $conn->query($query);
        $matchesData = array();

        while ($row = $result->fetch_assoc()) {
            $matchesData[$row['competition_name']][] = $row;
        }

        $conn->close();
        return $matchesData;
    } catch (Exception $e) {
        throw $e;
    }
}
?>
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
    <?php
    }
    ?>
</div>

<?php include "view-footer.php"; ?>
