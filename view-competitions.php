<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
    <style>
        .btn-custom {
            background-color: #ff9900; /* Custom background color */
            color: white; /* Text color */
            border: none; /* Remove border */
        }

        .btn-custom:hover {
            background-color: #e68a00; /* Custom background color on hover */
        }
    </style>
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
                            <a href="matches-by-competitions.php?competition_name=<?php echo $competition['competition_name']; ?>" class="btn btn-lg btn-custom">View Matches</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ... (footer content remains the same) ... -->
</body>

</html>
