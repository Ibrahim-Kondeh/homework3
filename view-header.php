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

        /* Custom CSS to style the horizontal navbar */
        .navbar {
            background-color: #4CAF50;
        }

        .navbar-brand, .nav-link {
            color: white;
            padding: 15px 20px;
        }

        .navbar-toggler-icon {
            background-color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand">Home</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="teams.php">Teams</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="players.php">Players</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="matches.php">Matches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="competitions.php">Competitions</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Teams Table -->
    <table class="team-table">
        <thead>
            <tr>
                <th>Team Name</th>
                <th>Country</th>
                <th>Coach</th>
                <th>Founded Year</th>
            </tr>
        </thead>
        <tbody>
            <!-- Team data rows will go here -->
        </tbody>
    </table>

    <!-- Rest of your HTML content goes here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
