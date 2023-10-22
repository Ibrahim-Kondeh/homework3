<?php
require_once("util-db.php");
require_once("model-matches.php");

// Assuming you have $competitionId from somewhere, for example, $_GET['id']
$competitionId = $_GET['competition_id'];
$matchesData = getMatchesByCompetition($competitionId);

$pageTitle = "Matches";
include "view-header.php";
include "view-matches.php";
include "view-footer.php";
?>
