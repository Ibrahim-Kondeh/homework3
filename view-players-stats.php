<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <style>
        .player-table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .player-table th,
        .player-table td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 14px;
        }

        .player-table th {
            background-color: #f2f2f2;
        }

        .highlight-row:hover {
            background-color: #ff0000;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .chart-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .chart {
            width: 45%;
        }

        #leafletMap {
            height: 400px;
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
                function generateColors($numColors)
                {
                    $colors = [];

                    for ($i = 0; $i < $numColors; $i++) {
                        $hue = ($i * 360 / $numColors) % 360;
                        $colors[] = "hsl($hue, 70%, 60%)";
                    }

                    return $colors;
                }

                $uniqueCountriesData = selectPlayers();
                $countryColors = generateColors(count($uniqueCountriesData));

                foreach ($uniqueCountriesData as $index => $row) {
                    $nationality = $row['nationality'];
                    $flagIcon = getFlagIcon($nationality);
                    $playerCount = $row['playerCount'];
                    $color = $countryColors[$index];
                ?>
                    <tr class="highlight-row">
                        <td><?php echo $nationality; ?></td>
                        <td><span class="<?php echo $flagIcon; ?>" style="color: <?php echo $color; ?>"></span></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="chart-container">
        <!-- Plotly Bar Chart -->
        <div class="chart">
            <div id="countryChart"></div>
        </div>

        <!-- Chart.js Pie Chart -->
        <div class="chart">
            <canvas id="countryPieChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Leaflet Map Container -->
    <div id="leafletMap"></div>

    <?php
    $labels = array_map(function ($row) {
        return $row['nationality'];
    }, $uniqueCountriesData);
    $counts = array_map(function ($row) {
        return $row['playerCount'];
    }, $uniqueCountriesData);
    ?>
    <script>
        const labels = <?php echo json_encode($labels); ?>;
        const counts = <?php echo json_encode($counts); ?>;
        const countryColors = <?php echo json_encode($countryColors); ?>;

        // Create data trace for Plotly bar chart
        const barChartTrace = {
            x: labels,
            y: counts,
            type: 'bar',
            marker: {
                color: countryColors
            }
        };

        // Layout for Plotly bar chart
        const barChartLayout = {
            title: 'Number of Countries Represented',
            xaxis: {
                title: 'Nationality'
            },
            yaxis: {
                title: 'Player Count',
                zeroline: false
            }
        };

        // Plot the Plotly bar chart
        Plotly.newPlot('countryChart', [barChartTrace], barChartLayout);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dynamic data for Chart.js pie chart (without duplicates)
        const pieCtx = document.getElementById('countryPieChart').getContext('2d');

        // Create Chart.js pie chart
        const countryPieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: counts,
                    backgroundColor: countryColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>

    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script>
        // Your existing data
        var series = [
            ["USA", 179],
            ["CAN", 332],
            ["CRI", 26],
            // ... (other data)
        ];

        var dataset = {};

        // Create a Leaflet map
        var map = L.map('leafletMap').setView([0, 0], 2);

        // Add a tile layer to the map (you can use other tile providers)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add markers to the map based on your data
        series.forEach(function (item) {
            var iso = item[0];
            var value = item[1];

            var marker = L.marker([0, 0]).addTo(map);

            // Set the marker position based on the country's ISO code (you might need a mapping)
            // For simplicity, this example uses [0, 0]
            marker.setLatLng([0, 0]).bindPopup(iso + ': ' + value);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0"
        crossorigin="anonymous"></script>
</body>

</html>
