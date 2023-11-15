<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Players</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="https://d3js.org/d3.v5.min.js"></script> <!-- Include D3.js library -->

    <style>
        /* Your existing styles */
        .player-table {
            width: 60%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* ... (other styles) */

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
        <!-- Your existing table code -->
        <!-- ... -->
    </div>

    <div class="chart-container">
        <!-- Your existing Plotly Bar Chart -->
        <div class="chart">
            <div id="countryChart"></div>
        </div>

        <!-- Your existing Chart.js Pie Chart -->
        <div class="chart">
            <canvas id="countryPieChart" width="400" height="200"></canvas>
        </div>
    </div>

    <!-- New D3.js Map Chart -->
    <div class="chart">
        <svg id="world-map" width="600" height="400"></svg>
    </div>

    <script>
        // Your existing JavaScript code for Plotly and Chart.js
        // ...

        // New D3.js Map Chart code
        var series = [
            ["USA", 179],
            ["CAN", 332],
            ["CRI", 26],
            // ... (other data)
        ];

        var dataset = {};
        // ... (other D3.js code)
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ZOsT2UQzY3FN8LkFDrF4D72KlSb0P9ABqT1ggK5biQOp6iUAZjA8M2reF5FOSta0"
        crossorigin="anonymous"></script>
</body>

</html>
