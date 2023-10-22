<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
</head>

<body>
    <div class="container">
        <h1>Matches</h1>

        <?php
        foreach ($matchesData as $match) {
        ?>
            <div class="card my-4">
                <div class="card-header">
                    <?php echo "Match ID: " . $match['match_id']; ?>
                </div>
                <div class="card-body">
                    <p>Date: <?php echo $match['match_date']; ?></p>
                    <p>Team 1: <?php echo $match['team1_name']; ?>, Score: <?php echo $match['score_team1']; ?></p>
                    <p>Team 2: <?php echo $match['team2_name']; ?>, Score: <?php echo $match['score_team2']; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
