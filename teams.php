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

    // Generate JavaScript code for SweetAlert2
    echo '<script>';
    if (!empty($successMessage)) {
        echo 'Swal.fire({
            icon: "success",
            title: "Success!",
            text: "' . $successMessage . '"
        });';
    }
    echo '</script>';
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
