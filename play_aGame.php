<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get team names from user input
    $teamAName = $_POST["teamA"];
    $teamBName = $_POST["teamB"];

    // Simulate the game
    $teamAScore = rand(0, 5); // Random score for Team A (0 to 5 goals)
    $teamBScore = rand(0, 5); // Random score for Team B (0 to 5 goals)

    // Display scores and winner
    echo "<h2>$teamAName vs $teamBName</h2>";
    echo "<strong>Final Score:</strong><br>";
    echo "$teamAName: $teamAScore<br>";
    echo "$teamBName: $teamBScore<br>";

    // Determine the winner or if it's a draw
    if ($teamAScore > $teamBScore) {
        echo "<strong>$teamAName wins!</strong>";
    } elseif ($teamBScore > $teamAScore) {
        echo "<strong>$teamBName wins!</strong>";
    } else {
        echo "<strong>It's a draw!</strong>";
    }
}
?>

<!-- Form to input team names -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="teamA">Enter Team A name:</label>
    <input type="text" id="teamA" name="teamA" required><br>

    <label for="teamB">Enter Team B name:</label>
    <input type="text" id="teamB" name="teamB" required><br>

    <input type="submit" value="Start Match">
</form>
