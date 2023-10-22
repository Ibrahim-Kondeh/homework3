<?php
require_once("util-db.php");
require_once("model-matches.php");

$pageTitle = "Matches";
include "view-header.php";

// Check if 'competition_id' parameter is set in the URL
if(isset($_GET['competition_id'])) {
    $competitionId = $_GET['competition_id']; // Assuming 'competition_id' is the parameter name
    $matchesData = getMatchesByCompetition($competitionId);
    include "view-matches.php";
} else {
    echo "Competition ID not provided.";
}

include "view-footer.php";
?>
