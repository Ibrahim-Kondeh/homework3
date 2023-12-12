<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Competitions</h1>
    <div class="table-responsive">
        <table class="competition-table table">
            <thead>
                <tr>
                    <th>Competition Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($competition = $competitions->fetch_assoc()) {
                ?>
                    <tr class="highlight-row">
                          <td><?php echo $competition['competition_id']; ?></td>
                        <td><?php echo $competition['competition_name']; ?></td>
                        <td><?php echo $competition['satart_date']; ?></td>
                        <td><?php echo $competition['end_date']; ?></td>
                    <td> 
                      <?php
                            include "view-competition-editform.php";
                         ?>
              </td>
                     <td>
                      <form method="post" action="">
                     <input type="hidden" name="cid" value="<?php echo $competition['competition_id']; ?>">
                    <input type="hidden" name="actionType" value="Delete">
                      <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                       <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                         </svg>
                          </button>
                             </form>
             </td>
                          <td>
                            <a class="btn btn-primary" href="matches-by-competitions.php?competition_name=<?php echo $competition['competition_name']; ?>">View Matches</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ... (footer content remains the same) ... -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
