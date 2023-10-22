<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
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

        /* Custom CSS for horizontal navigation bar */
        .navbar {
            background-color: #4CAF50;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="/">Home</a>
        <a href="teams.php">Teams</a>
        <a href="players.php">Players</a>
        <a href="matches.php">Matches</a>
        <a href="competitions.php">Competitions</a>
    </div>

    <h1>Teams</h1>
    <table class="team-table">
        <!-- Table content goes here -->
    </table>

</body>

</html>
