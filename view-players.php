<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Custom CSS to style the players table */
        .player-table {
            width: 100%;
            border-collapse: collapse;
        }

        .player-table th, .player-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .player-table th {
            background-color: #f2f2f2;
        }

        /* Custom CSS for table row highlighting */
        .highlight-row:hover {
            background-color: #ff0000;
        }

        .table-responsive {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Players</h1>
    <div class="table-responsive">
        <table class="player-table table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                     <th>Nationality</th>th>
                    <th>Position</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($players = $player->fetch_assoc()) {
                ?>
                    <tr class="highlight-row">
                        <td><?php echo $players['player_name']; ?></td>
                        <td><?php echo $players['date_of_birth']; ?></td>
                        <td><?php echo $players['nationality']; ?></td>
                        <td><?php echo $players['position']; ?></td>
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
