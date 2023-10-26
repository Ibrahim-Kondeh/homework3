<?php
require_once("util-db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actionType'])) {
    if ($_POST['actionType'] == "Add") {
        $team1Id = $_POST['team1'];
        $team2Id = $_POST['team2'];
        $matchDate = $_POST['matchDate'];
        $scoreTeam1 = $_POST['scoreTeam1'];
        $scoreTeam2 = $_POST['scoreTeam2'];
        $competitionId = $_POST['competition']; // Add this line

        try {
            $success = addMatch($team1Id, $team2Id, $matchDate, $scoreTeam1, $scoreTeam2, $competitionId);
            if ($success) {
                // Redirect back to the matches page after adding the match
                header("Location: matches.php");
                exit();
            } else {
                echo "Failed to add match. Please try again.";
            }
        } catch (Exception $e) {
            // Handle exceptions, log errors, etc.
            echo "Failed to add match. Please try again.";
        }
    } else {
        // Handle other action types if needed
    }
} else {
    // Invalid request, redirect the user to the home page or show an error message
    header("Location: index.php");
    exit();
}
?>
