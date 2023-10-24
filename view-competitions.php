<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
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
                            <a href="matches.php?competition=<?php echo urlencode($competition['competition_name']); ?>" class="btn btn-primary view-matches-btn">View Matches</a>
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
