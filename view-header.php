<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand">Sports League</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="teams.php">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="players.php">Players</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="matches.php">Fixtures</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="competitions.php">Competitions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- I might add other contents here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
