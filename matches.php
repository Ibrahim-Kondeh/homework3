<?php
require_once("util-db.php");
require_once("model-matches.php");

$pageTitle = "Matches";
include "view-header.php";

// Check if 'id' parameter is set in the URL
if(isset($_GET['id'])) {
    $competitionId = $_GET['id'];
    $matchesData = getMatchesByCompetition($competitionId);
    include "view-matches.php";
} else {
    echo "Competition ID not provided.";
}

include "view-footer.php";
?>
