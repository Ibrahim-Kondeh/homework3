<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Teams</h1>
                <table class="team-table">
                    <!-- ... (table headers remain the same) ... -->
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
                                <td>
                                    <a href="edit-team.php?id=<?php echo $team['team_id']; ?>" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="delete-team.php?id=<?php echo $team['team_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this team?');">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="players-by-team.php?id=<?php echo $team['team_id']; ?>" class="btn btn-secondary btn-sm">
                                        <i class="bi bi-person"></i> Players
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
