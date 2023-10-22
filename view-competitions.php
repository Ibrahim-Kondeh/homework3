<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Competitions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Custom CSS for the competitions table */
        .competition-table {
            width: 100%;
            border-collapse: collapse;
        }

        .competition-table th, .competition-table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .competition-table th {
            background-color: #f2f2f2;
        }

        /* Apply striped rows for better readability */
        .competition-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .competition-table tr:hover {
            background-color: #ff0000; /* Change background color on hover */
        }

        .highlight-row {
            transition: background-color 0.3s; /* Smooth transition effect for row highlight */
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
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
