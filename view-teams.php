<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
    <style>
        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }

        .table-hover tbody tr:nth-of-type(odd) {
            background-color: #ff9999; /* Red color for odd rows */
        }

        .table-hover tbody tr:nth-of-type(even) {
            background-color: #ffffff; /* White color for even rows */
        }
    </style>
</head>

<body>
    <h1>Teams</h1>
    <table class="table table-hover">
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
            while ($team = $teams->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $team['team_id']; ?></td>
                    <td><?php echo $team['team_name']; ?></td>
                    <td><?php echo $team['coach_name']; ?></td>
                    <td><?php echo $team['founded_year']; ?></td>
                    <td><?php echo $team['home_stadium']; ?></td>
                    <td><a href="players.php?id=<?php echo $team['team_id']; ?>">Players</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>
