<?php
require_once("util-db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['actionType']) && $_POST['actionType'] == "Add") {
    $team1Id = $_POST['team1'];
    $team2Id = $_POST['team2'];
    $matchDate = $_POST['matchDate'];
    $scoreTeam1 = $_POST['scoreTeam1'];
    $scoreTeam2 = $_POST['scoreTeam2'];

    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `matches` (`team1_id`, `team2_id`, `match_date`, `score_team1`, `score_team2`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iissi", $team1Id, $team2Id, $matchDate, $scoreTeam1, $scoreTeam2);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        // Redirect back to the matches page after adding the match
        header("Location: matches.php");
        exit();
    } catch (Exception $e) {
        // Handle exceptions, display error message, etc.
        // You can also redirect the user back to the form with an error message
        echo "Failed to add match. Please try again.";
    }
} else {
    // Invalid request, redirect the user to the home page or show an error message
    header("Location: index.php");
    exit();
}
?>
