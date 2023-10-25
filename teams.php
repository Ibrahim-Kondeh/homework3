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
        // Add more cases if you have other actions
    }
}

if (!empty($successMessage)) {
    echo '<div class="alert alert-success text-center" role="alert">' . $successMessage . '</div>';
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
