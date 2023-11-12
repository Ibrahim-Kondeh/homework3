<?php
require_once("util-db.php");
require_once("model-players-stats.php");

$pageTitle = "Players Stats";
include "view-header.php";

// Get player data
$playerData = selectPlayers();

// Include the view and pass player data
include "view-players-stats.php";

include "view-footer.php";
?>
