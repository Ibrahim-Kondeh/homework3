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
                        <td><?php echo $competition['competition_name']; ?></td>
                        <td><?php echo $competition['satart_date']; ?></td>
                        <td><?php echo $competition['end_date']; ?></td>
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
