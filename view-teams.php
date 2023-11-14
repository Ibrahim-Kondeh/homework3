<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .team-table {
            width: 100%;
            border-collapse: collapse;
        }

        .team-table th,
        .team-table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .team-table th {
            background-color: #f2f2f2;
        }

        .highlight-row:hover {
            background-color: #00ffd5;
        }

        .fixed-top-button {
            position: fixed;
            top: 10px;
            right: 10px;
        }

        .btn-sm {
            padding: 10px 15px;
            margin: 5px;
        }
    </style>
</head>

<body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Teams</h1>
                <table class="team-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Team Name</th>
                            <th>Coach</th>
                            <th>Founded Year</th>
                            <th>Home Stadium</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rowNumber = 0;
                        while ($team = $teams->fetch_assoc()) {
                        ?>
                        <tr class="highlight-row">
                            <td><?php echo $team['team_id']; ?></td>
                            <td><?php echo $team['team_name']; ?></td>
                            <td><?php echo $team['coach_name']; ?></td>
                            <td><?php echo $team['founded_year']; ?></td>
                            <td><?php echo $team['home_stadium']; ?></td>
                            <td><?php include "view-teams-editform.php"; ?></td>
                            <td>
                                <form method="post" action="">
                                    <!-- Your delete form data here -->
                                    <button type="submit" class="btn btn-danger btn-sm" name="deleteTeam"
                                        onclick="return confirm('Are you sure you want to delete this team?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path
                                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                        </svg>
                                         <?php echo "<script>Swal.fire({ title: 'Good job!', text: 'Team added successfully!', icon: 'success' });</script>"; ?>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form method="post" action="">
                                    <!-- Your additional form data here -->
                                </form>
                            </td>
                            <td>
                                <a href="players-by-team.php?id=<?php echo $team['team_id']; ?>"
                                    class="btn btn-secondary btn-sm">
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
            <div class="col-md-3">
                <?php
                if (!empty($successMessage)) {
                    echo '<div class="alert alert-success text-center" role="alert">' . $successMessage . '</div>';
                }
                ?>
                <!-- Include the form within the modal -->
                <?php include "view-teams-newform.php"; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"> </script>
 <script>
         // Function to show delete message
        function showDeleteMessage(teamName) {
            Swal.fire({
                title: "Team Deleted!",
                text: "The team " + teamName + " has been deleted.",
                icon: "success"
            });
        }
       
    </script>
</body>

</html>
