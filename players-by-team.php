<?php
require_once("util-db.php");
require_once("model-players-by-team.php");

$pageTitle = "Team Roster";
include "view-header.php";

// Check if 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $teamId = $_GET['id'];
    $players = selectPlayersByTeam($team_id);
    include "view-players-by-team.php";
} else {
    echo "Team ID not provided.";
}

include "view-footer.php";
?>
