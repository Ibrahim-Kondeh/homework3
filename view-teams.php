<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
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
            $rowNumber = 0;
            while ($team = $teams->fetch_assoc()) {
                $rowNumber++;
            ?>
                <tr style="background-color: <?php echo $rowNumber % 2 == 0 ? '#ffffff' : '#ff9999'; ?>"
                    onmouseover="this.style.backgroundColor='#ff0000'"
                    onmouseout="this.style.backgroundColor='<?php echo $rowNumber % 2 == 0 ? '#ffffff' : '#ff9999'; ?>'">
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
