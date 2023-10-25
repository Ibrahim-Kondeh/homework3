<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom CSS to style the teams table */
        .team-table {
            width: 100%;
            border-collapse: collapse;
        }

        .team-table th, .team-table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .team-table th {
            background-color: #f2f2f2;
        }

        /* Custom CSS for table row highlighting */
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


                                

                                 <td>
                                    <form method="post" action="view-teams.php">
            <input type="hidden" name="teamId" value="<?php echo $team['team_id']; ?>">
            <button type="submit" class="btn btn-danger btn-sm" name="deleteTeam" onclick="return confirm('Are you sure you want to delete this team?');">
                <i class="bi bi-trash3"></i> Delete
            </button>
        </form>

                                    </td>

                                
                                <td>
                      
                                      <a href="edit-team.php?id=<?php echo $team['team_id']; ?>" class="btn btn-primary btn-sm">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                 <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                   <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
               Edit
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
            <div class="col-md-3">
                <!-- Include the form within the modal -->
                <?php include "view-teams-newform.php"; ?>
            </div>
        </div>
    </div>

    <!-- Add button at the top right corner -->
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
