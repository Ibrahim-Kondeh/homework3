<!doctype html>
<html lang="en">

<head>
 
</head>

<body>
    <h1>Matches</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Match ID</th>
                    <th>Match Date</th>
                    <th>Home Team</th>
                    <th>Away Team</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($match = $matches->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$match['match_id']}</td>";
                    echo "<td>{$match['match_date']}</td>";
                    echo "<td>{$match['team1_name']}</td>";
                    echo "<td>{$match['team2_name']}</td>";
                    echo "<td>{$match['score_team1']} - {$match['score_team2']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
