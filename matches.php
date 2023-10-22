<?php
require_once("model-matches.php");

// Assuming you have $competitionId from somewhere, for example, $_GET['id']
$competition_id = $_GET['id'];
$matchesData = getMatchesByCompetition($competitionId);
include("view-matches.php");
?>
