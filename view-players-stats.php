<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> <!-- Add Leaflet library -->

    <style>
        /* Custom CSS to style the players table */
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
            font-size: 14px; /* Adjust font size as needed */
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

        #cesiumContainer {
            width: 100%;
            height: 400px;
        }

        /* Style for the map container */
        #map {
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
                // Function to generate distinct colors
                function generateColors($numColors)
                {
                    $colors = [];

                    for ($i = 0; $i < $numColors; $i++) {
                        $hue = ($i * 360 / $numColors) % 360;
                        $colors[] = "hsl($hue, 70%, 60%)"; // You can adjust saturation and lightness as needed
                    }

                    return $colors;
                }

                // Get unique countries and their player counts
                $uniqueCountriesData = selectPlayers();

                // Generate distinct colors for each country
                $countryColors = generateColors(count($uniqueCountriesData));

                foreach ($uniqueCountriesData as $index => $row) {
                    $nationality = $row['nationality'];
                    $flagIcon = getFlagIcon($nationality);
                    $playerCount = $row['playerCount'];
                    $color = $countryColors[$index]; // Assign a unique color to each country
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

    <!-- Chart containers -->
    <div class="chart-container">
        <!-- Bar Chart -->
        <div class="chart">
            <canvas id="countryChart" width="400" height="200"></canvas>
        </div>

        <!-- Pie Chart -->
        <div class="chart">
            <canvas id="countryPieChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- Cesium container -->
    <div id="cesiumContainer"></div>

    <!-- Leaflet Map container -->
    <div id="map"></div>

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

    <!-- Script for Cesium -->
    <script>
        // Initialize Cesium globe
        Cesium.Ion.defaultAccessToken = 'your-Cesium-Ion-token'; // Get your free Cesium Ion token: https://cesium.com/ion/signup/

        const viewer = new Cesium.Viewer('cesiumContainer', {
            imageryProvider: new Cesium.createTileMapServiceImageryProvider({
                url: Cesium.buildModuleUrl('Assets/Textures/NaturalEarthII')
            }),
            baseLayerPicker: false,
            geocoder: false,
            infoBox: false,
            sceneModePicker: false,
            navigationHelpButton: false,
            navigationInstructionsInitiallyVisible: false,
            animation: false,
            timeline: false
        });

        // Add pins for each country
        const dataSource = new Cesium.CzmlDataSource();
        viewer.dataSources.add(dataSource);

        const locationsCesium = <?php echo json_encode($uniqueCountriesData); ?>;
        locationsCesium.forEach(location => {
            dataSource.entities.add({
                position: Cesium.Cartesian3.fromDegrees(location.longitude, location.latitude),
                point: {
                    pixelSize: 8,
                    color: Cesium.Color.RED,
                    outlineColor: Cesium.Color.WHITE,
                    outlineWidth: 2
                },
                label: {
                    text: location.nationality,
                    font: '14px sans-serif',
                    style: Cesium.LabelStyle.FILL_AND_OUTLINE,
                    fillColor: Cesium.Color.YELLOW,
                    outlineColor: Cesium.Color.BLACK,
                    outlineWidth: 2,
                    pixelOffset: new Cesium.Cartesian2(0, -20)
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0" crossorigin="anonymous"></script>
</body>

</html>
