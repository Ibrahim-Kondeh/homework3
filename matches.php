<?php
require_once("model-matches.php");

// Assuming you have $competitionId from somewhere, for example, $_GET['id']
$competitionId = $_GET['id'];  // Corrected variable name
$matchesData = getMatchesByCompetition($competitionId);
include("view-matches.php");
?>
