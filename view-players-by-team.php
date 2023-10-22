<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
</head>

<body>
    <h1>Players</h1>
    <div class="table-responsive">
        <table class="player-table table">
            <!-- ... (table headers remain the same) ... -->
            <tbody>
                <?php
                while ($players = $players->fetch_assoc()) {
                ?>
                    <tr class="highlight-row">
                        <td><?php echo $players['player_name']; ?></td>
                        <td><?php echo $players['date_of_birth']; ?></td>
                        <td><?php echo $players['nationality']; ?></td>
                        <td><?php echo $players['position']; ?></td>
                        <td><?php echo $players['team_name']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
