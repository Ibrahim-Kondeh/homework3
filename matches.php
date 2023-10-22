<?php
require_once("util-db.php");
require_once("model-matches.php");

$pageTitle = "Matches";
include "view-header.php";

$competitionId = isset($_GET['id']) ? $_GET['id'] : null;
$matchesData = selectMatchesByCompetition($competitionId); // Call the correct function name
include "view-matches-approach1.php";

include "view-footer.php";
?>
