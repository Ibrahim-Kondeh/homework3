<?php
require_once("util-db.php");
require_once("model-teams.php");
$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType'])) {
    switch ($_POST['actionType']) {
        case "Add":
            // Attempt to insert data into the database
            $insertSuccess = insertTeams($_POST['tName'], $_POST['tcName'], $_POST['tFyear'], $_POST['tStadium']);
            
            if ($insertSuccess) {
                // If insertion is successful, set a session variable
                $_SESSION['team_added'] = true;
            } else {
                // Handle insertion failure if needed
            }
            break;
        // Add more cases if necessary for other actions
    }
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
