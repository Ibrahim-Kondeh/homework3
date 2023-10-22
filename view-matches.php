<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
</head>

<body>
    <div class="container">
        <h1>Matches</h1>

        <?php
        foreach ($competitions as $competition) {
            $matchesData = getMatchesByCompetition($competition['competition_id']);
        ?>
            <div class="card my-4">
                <div class="card-header">
                    <?php echo $competition['competition_name']; ?>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Match</th>
                                <th>Date</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($matchesData as $match) { ?>
                                <tr>
                                    <td>(<?php echo $match['team1_name']; ?> vs <?php echo $match['team2_name']; ?>)</td>
                                    <td><?php echo $match['match_date']; ?></td>
                                    <td><?php echo $match['score_team1']; ?> : <?php echo $match['score_team2']; ?></td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
