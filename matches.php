<?php
require_once("util-db.php");
require_once("model-matches.php");

$pageTitle = "Matches";
include "view-header.php";

$matchesData = getAllMatchesGroupedByCompetition($_GET['match_id']);
include "view-matches.php";

include "view-footer.php";
?>
