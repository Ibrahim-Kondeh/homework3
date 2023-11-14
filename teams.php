<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['deleteTeam'])) {
        $teamId = $_POST['teamId'];
        if (deleteTeams($teamId)) {
            $successMessage = "Team deleted successfully!";
        } else {
            $successMessage = "Failed to delete team. Please try again.";
        }
    }
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
