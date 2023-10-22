<!doctype html>
<html lang="en">

<head>
    <!-- ... (head content remains the same) ... -->
</head>

<body>
    <div class="container">
        <h1>Matches</h1>

        <?php
   
        foreach ($matchesData as $competition => $matches) {
        ?>
            <div class="card my-4">
                <div class="card-header">
                    <?php echo $competition; ?>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($match as $matches => $result) { ?>
                            <li class="list-group-item">
                                <?php echo $match; ?> - <?php echo $result; ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
