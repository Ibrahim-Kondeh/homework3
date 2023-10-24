<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Increase the table size */
        .matches-table th,
        .matches-table td {
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Matches for Competition: <?php echo $competitionName; ?></h1>
        <div class="table-responsive">
            <table class="matches-table table">
                <thead>
                    <tr>
                        <th>Match ID</th>
                        <th>Match Date</th>
                        <th>Home Team</th>
                        <th>Away Team</th>
                        <th>Score (Home: Away)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($matches as $match) {
                        echo "<tr>";
                        echo "<td>{$match['match_id']}</td>";
                        echo "<td>{$match['match_date']}</td>";
                        echo "<td>{$match['team1_name']}</td>";
                        echo "<td>{$match['team2_name']}</td>";
                        echo "<td>{$match['score_team1']} : {$match['score_team2']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
