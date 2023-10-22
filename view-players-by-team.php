<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
    <style>
        /* Custom CSS for the wider table and striped rows */
        .player-table {
            width: 100%; /* Set the table width to 100% */
            border-collapse: collapse;
        }

        .player-table th, .player-table td {
            padding: 12px; /* Increase padding for better spacing */
            border: 1px solid #ddd;
            text-align: left;
        }

        .player-table th {
            background-color: #f2f2f2;
        }

        /* Apply striped rows for better readability */
        .player-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .player-table tr:hover {
            background-color: #ff0000; /* Change background color on hover */
        }

        .highlight-row {
            transition: background-color 0.3s; /* Smooth transition effect for row highlight */
        }
    </style>
</head>

<body>
    <h1>Players</h1>
    <div class="table-responsive">
        <table class="player-table table">
            <!-- ... (table headers remain the same) ... -->
            <tbody>
                <?php
                while ($player = $players->fetch_assoc()) { // Use a different variable name, like $player
                ?>
                    <tr class="highlight-row">
                        <td><?php echo $player['player_name']; ?></td>
                        <td><?php echo $player['date_of_birth']; ?></td>
                        <td><?php echo $player['nationality']; ?></td>
                        <td><?php echo $player['position']; ?></td>
                        <td><?php echo $player['team_name']; ?></td>
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
