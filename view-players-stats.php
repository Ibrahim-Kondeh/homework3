<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <style>
        
        /* Custom CSS to style the players table */
        .player-table {
            width: 100%;
            border-collapse: collapse;
        }
        .player-table th,
        .player-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .player-table th {
            background-color: #f2f2f2;
        }
        /* Custom CSS for table row highlighting */
        .highlight-row:hover {
            background-color: #ff0000;
        }
        .table-responsive {
            margin-top: 20px;
        }
        /* Style for the chart containers */
        .chart-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .chart {
            width: 45%;
        }
    </style>
</head>
<body>
    <h1>One Football One World</h1>
    <div class="table-responsive">
        <table class="player-table table">
            <thead>
                <tr>
                    <th>Nationality</th>
                    <th>Flag</th>
                </tr>
            </thead>
            <tbody>
    <?php
  // Get unique countries and their player counts
  $uniqueCountriesData = selectPlayers();
 
// Get unique countries and their player counts
$uniqueCountriesData = selectPlayers();

// Generate distinct colors for each country
$countryColors = generateColors(count($uniqueCountriesData));

  foreach ($uniqueCountriesData as $row) {
foreach ($uniqueCountriesData as $index => $row) {
    $nationality = $row['nationality'];
    $flagIcon = getFlagIcon($nationality);
    $playerCount = $row['playerCount'];
    $color = $countryColors[$index]; // Assign a unique color to each country

    ?>
        <tr class="highlight-row">
            <td><?php echo $nationality; ?></td>
            <td><span class="<?php echo $flagIcon; ?>"></span></td>
        </tr>
    <tr class="highlight-row">
        <td><?php echo $nationality; ?></td>
        <td><span class="<?php echo $flagIcon; ?>"></span></td>
    </tr>
    <?php
    }
    ?>
}
?>

</tbody>
        </table>
    </div>
@@ -97,72 +102,53 @@
    </div>

 <?php
  // Dynamic data for charts (without duplicates)
  $labels = array_map(function ($row) {
    return $row['nationality'];
  }, $uniqueCountriesData);
  $counts = array_map(function ($row) {
    return $row['playerCount'];
  }, $uniqueCountriesData);
  ?>
    <script>
        // Dynamic data for charts (without duplicates)
        const labels = <?php echo json_encode($labels); ?>;
        const counts = <?php echo json_encode($counts); ?>;

        // Get canvas elements and contexts
        const ctx = document.getElementById('countryChart').getContext('2d');
        const pieCtx = document.getElementById('countryPieChart').getContext('2d');

        // Create bar chart
        const countryChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Countries Represented',
                    data: counts,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Change the color as needed
                    borderColor: 'rgba(75, 192, 192, 1)', // Change the color as needed
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
// Dynamic data for charts (without duplicates)
const labels = <?php echo json_encode($labels); ?>;
const counts = <?php echo json_encode($counts); ?>;
const countryColors = <?php echo json_encode($countryColors); ?>;

// Get canvas elements and contexts
const ctx = document.getElementById('countryChart').getContext('2d');
const pieCtx = document.getElementById('countryPieChart').getContext('2d');

// Create bar chart
const countryChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Number of Countries Represented',
            data: counts,
            backgroundColor: countryColors, // Use the generated colors
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        });

        // Create pie chart
        const countryPieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: counts,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        // Add more colors as needed
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        // Add more colors as needed
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
        }
    }
});

// Create pie chart
const countryPieChart = new Chart(pieCtx, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: counts,
            backgroundColor: countryColors, // Use the generated colors
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
    }
});

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>
</html>
