<?php
require_once("util-db.php");
require_once("model-matches.php");

// Check if 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $competitionId = $_GET['id'];
    $matchesData = getMatchesByCompetition($competitionId);

    $pageTitle = "Matches";
    include "view-header.php";
    include "view-matches.php";
    include "view-footer.php";
} else {
    // Handle the case where 'id' parameter is not set
    echo "Competition ID not provided.";
}
?>
