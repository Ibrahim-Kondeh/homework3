<?php
require_once("util-db.php");
require_once("model-matches.php");

$pageTitle = "Matches";
include "view-header.php";

$matchesData = selectMatchesByCompetition(); // Assuming you have a function to get matches grouped by competition
include "view-matches-approach1.php";

include "view-footer.php";
?>
