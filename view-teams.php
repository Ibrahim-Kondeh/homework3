<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Custom CSS to style the teams table */
        .team-table {
            width: 100%;
            border-collapse: collapse;
        }

        .team-table th, .team-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .team-table th {
            background-color: #f2f2f2;
        }

        /* Custom CSS for table row highlighting */
        .highlight-row:hover {
            background-color: #ff0000;
        }
    </style>
</head>

<body>
    <h1>Teams</h1>
    <table class="team-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Team Name</th>
                <th>Coach</th>
                <th>Founded Year</th>
                <th>Home Stadium</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rowNumber = 0;
            while ($team = $teams->fetch_assoc()) {
                $rowNumber++;
            ?>
                <tr class="highlight-row">
                    <td><?php echo $team['team_id']; ?></td>
                    <td><?php echo $team['team_name']; ?></td>
                    <td><?php echo $team['coach_name']; ?></td>
                    <td><?php echo $team['founded_year']; ?></td>
                    <td><?php echo $team['home_stadium']; ?></td>
                    <td><a href="players-by-team.php?id=<?php echo $team['team_id']; ?>">Players</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
