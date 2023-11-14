<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

$successMessage = "";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertTeams($_POST['tName'], $_POST['tcName'], $_POST['tFyear'], $_POST['tStadium'])) {
                $successMessage = "Team added successfully! 😊";
            } else {
                $successMessage = "Failed to add team. Please try again.";
            }
            break;

        case "Edit":
            if (updateTeams($_POST['tName'], $_POST['tcName'], $_POST['tFyear'], $_POST['tStadium'], $_POST['teamId'])) {
                $successMessage = "Team edited successfully! 😊";
            } else {
                $successMessage = "Failed to edit team. Please try again.";
            }
            break;

        case "Delete":
            if (deleteTeams($_POST['teamId'])) {
                $successMessage = "Team deleted successfully!";
            } else {
                $successMessage = "Failed to delete team. Please try again.";
            }
            break;
    }

    // Clear the POST data
    $_POST = array();
}

if (!empty($successMessage)) {
    echo '<div class="alert alert-success text-center" role="alert">' . $successMessage . '</div>';
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
