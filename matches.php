<?php
require_once("util-db.php");
require_once("model-matches.php");

$pageTitle = "Matches";
include "view-header.php";

$matchesData = getAllMatchesGroupedByCompetition();
include "view-matches.php";

include "view-footer.php";
?>
