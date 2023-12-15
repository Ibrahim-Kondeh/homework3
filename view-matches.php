<?php
$pageTitle = "Matches";
include "view-matches-newform.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
    body {
        background-color: #333; /* Set the background color */
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

    .table-container th, .table-container td {
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
</style>
</head>
<body>
<div class="container">
    <?php foreach ($matchesData as $competition => $matches) { ?>
        <div class="table-container">
            <h2><?php echo htmlspecialchars($competition); ?></h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Home Team</th>
                        <th>Away Team</th>
                        <th>Date</th>
                        <th>Score</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($matches as $match) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($match['team1_name']); ?></td>
                            <td><?php echo htmlspecialchars($match['team2_name']); ?></td>
                            <td><?php echo htmlspecialchars($match['match_date']); ?></td>
                            <td><?php echo htmlspecialchars($match['score_team1']) . " : " . htmlspecialchars($match['score_team2']); ?></td>
                           <td><?php include "view-matches-editform.php";?></td>

                            <td>
                                <form method="post" action="">
                                    <input type="hidden" name="matchId" value="<?php echo $match['match_id']; ?>">
                                    <input type="hidden" name="actionType" value="Delete">
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } ?>
</div>
</body>
</html>
