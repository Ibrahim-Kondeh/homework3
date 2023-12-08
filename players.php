<?php
require_once("util-db.php");
require_once("model-players.php");

$pageTitle = "Players";
include "view-header.php";

$successMessage = "";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            if (insertPlayer($_POST['pName'], $_POST['pDob'], $_POST['pNationality'], $_POST['pPosition'])) {
                $successMessage = "Team added successfully! 😊";
            } else {
                $successMessage = "Failed to add team. Please try again.";
            }
            break;
        case "Edit":
            if (updatePlayer($_POST['pName'], $_POST['pDob'], $_POST['pNationality'], $_POST['pPosition'])) {
                $successMessage = "Team edited successfully! 😊";
            } else {
                $successMessage = "Failed to edit team. Please try again.";
            }
            break;
        case "Delete":
            if (deletePlayer($_POST['playerId'])) {
                $successMessage = "Team deleted successfully!";
            } else {
                $successMessage = "Failed to delete team. Please try again.";
            }
            break;
    }
}

if (!empty($successMessage)) {
    echo '<div class="alert alert-success text-center" role="alert">' . $successMessage . '</div>';
}






$players = selectPlayer();

include "view-players.php";
include "view-footer.php";
?>
