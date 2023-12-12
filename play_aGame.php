<?php
// Get team names from user input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $teamAName = $_POST["teamA"];
    $teamBName = $_POST["teamB"];
} else {
    $teamAName = "Team A"; // Default names
    $teamBName = "Team B";
}

// Initialize scores
$teamAScore = 0;
$teamBScore = 0;

// Simulate the game
for ($i = 0; $i < 90; $i++) { // Simulate a 90-minute match
    // Simulate events
    $event = rand(1, 10); // Random event generator

    // Increment score for team A or team B based on random events
    if ($event % 2 === 0) {
        $teamAScore++;
        echo "$teamAName scores!<br>";
    } else {
        $teamBScore++;
        echo "$teamBName scores!<br>";
    }
}

// Display final score
echo "<strong>Final Score:</strong><br>";
echo "$teamAName: $teamAScore<br>";
echo "$teamBName: $teamBScore<br>";

// Determine the winner or if it's a draw
if ($teamAScore > $teamBScore) {
    echo "$teamAName wins!";
} elseif ($teamBScore > $teamAScore) {
    echo "$teamBName wins!";
} else {
    echo "It's a draw!";
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
