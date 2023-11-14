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
                <?php
                if (!empty($successMessage)) {
                    echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: "' . $successMessage . '"
                            });
                          </script>';
                }
                ?>
                <table class="team-table">
                    <!-- ... rest of your table code ... -->
                </table>
            </div>
            <div class="col-md-3">
                <!-- ... your form code ... -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
