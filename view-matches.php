<?php
$pageTitle = "Matches";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle; ?></title>
    <!-- Bootstrap CSS and Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #333;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .table-container {
            background-color: rgba(0, 0, 0, 0.7);
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .table-container th,
        .table-container td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .table-container th {
            background-color: #444;
        }

        .table-container tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .add-match-button {
            text-align: right;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include "view-header.php"; ?>

    <div class="container">
        <div class="add-match-button">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMatchModal">
                Add Match
            </button>
        </div>

        <?php
        foreach ($matchesData as $competition => $matches) {
        ?>
            <div class="table-container">
                <h2><?php echo htmlspecialchars($competition); ?></h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Home Team</th>
                            <th>Away Team</th>
                            <th>Date</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($matches as $match) { ?>
                            <tr>
                                <td><?php echo htmlspecialchars($match['team1_name']); ?></td>
                                <td><?php echo htmlspecialchars($match['team2_name']); ?></td>
                                <td><?php echo htmlspecialchars($match['match_date']); ?></td>
                                <td><?php echo htmlspecialchars($match['score_team1']) . " : " . htmlspecialchars($match['score_team2']); ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <?php
        }
        ?>

    </div>

    <?php include "view-footer.php"; ?>

    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0"
        crossorigin="anonymous"></script>
</body>

</html>
