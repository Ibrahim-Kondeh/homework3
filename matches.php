<?php
require_once("util-db.php");
require_once("model-matches.php");

// Assuming you have $competitionId from somewhere, for example, $_GET['id']
$competitionId = $_GET['id'];
$matchesData = getMatchesByCompetition($competitionId);
include("view-matches.php");
?>
