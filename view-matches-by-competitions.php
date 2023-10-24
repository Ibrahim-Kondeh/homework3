<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
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
        <!-- Add Bootstrap button -->
        <a href="#" class="btn btn-primary mb-3">View Matches</a>
        <div class="table-responsive">
            <table class="matches-table table">
                <thead>
                    <tr>
                        <th>Match ID</th>
                        <th>Match Date</th>
                        <th>Home Team</th>
                        <th>Away Team</th>
                        <th>Score Home Team</th>
                        <th>Score Away Team</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($match = $matches->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $match['match_id']; ?></td>
                            <td><?php echo $match['match_date']; ?></td>
                            <td><?php echo $match['team1_name']; ?></td>
                            <td><?php echo $match['team2_name']; ?></td>
                            <td><?php echo $match['score_team1']; ?></td>
                            <td><?php echo $match['score_team2']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- ... (Bootstrap JS and other scripts) ... -->
</body>

</html>
